<?php
session_start();

// Verify that the user is logged in
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_destroy();

    // Redirection to the connexion page
    header('Location: ../views/connexionView.php');
    exit();
}

// Connection to database
$host = 'localhost';
$dbname = 'game_collection';
$user = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Verify connection
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Get the user's information
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM UTILISATEUR WHERE id_utilisateur = $user_id";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);

    // Verify that the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modify'])) {
        // Verify that all fields are filled in and that the passwords are identical
        if (
            !empty($_POST['name']) &&
            !empty($_POST['firstname']) &&
            !empty($_POST['email']) &&
            !empty($_POST['password']) &&
            !empty($_POST['confirm__password']) &&
            ($_POST['password'] === $_POST['confirm__password'])
        ) {
            // Get the new information
            $newName = mysqli_real_escape_string($conn, $_POST['name']);
            $newFirstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $newEmail = mysqli_real_escape_string($conn, $_POST['email']);
            $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Update the user's information
            $updateQuery = "UPDATE UTILISATEUR SET nom_utilisateur = '$newName', prenom_utilisateur = '$newFirstname', email_utilisateur = '$newEmail', mot_de_passe_utilisateur = '$newPassword' WHERE id_utilisateur = $user_id";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                // Redirection to the profil page
                header('Location: ../views/profilView.php');
                exit();
            } else {
                echo "Erreur lors de la mise à jour : " . mysqli_error($conn);
            }
        } else {
            echo "Tous les champs du formulaire doivent être remplis et les mots de passe doivent être identiques.";
        }
    }

    // Close connection
    mysqli_close($conn);
} else {
    echo "Erreur lors de la requête : " . mysqli_error($conn);
    exit();
}
