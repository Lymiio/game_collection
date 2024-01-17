<?php
session_start();

// Verification of the form submission
if (isset($_POST['email']) && isset($_POST['password'])) {
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

    // Prepare the query
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT * FROM UTILISATEUR WHERE email_utilisateur = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if ($user && password_verify($_POST['password'], $user['mot_de_passe_utilisateur'])) {
            $_SESSION['user_id'] = $user['id_utilisateur'];

            // Redirection to main page
            header('Location: ../views/homeView.php');
            exit();
        } else {
            echo 'Identifiants incorrects';
        }
    } else {
        echo "Erreur lors de la requête : " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
