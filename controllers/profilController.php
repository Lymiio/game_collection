<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location: ../views/connexionView.php');
    exit();
}

// Connexion à la base de données
$host = 'localhost';
$dbname = 'game_collection';
$user = 'root';
$password = '';

$connexion = mysqli_connect($host, $user, $password, $dbname);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Récupérer les données de l'utilisateur à partir de la base de données
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM UTILISATEUR WHERE id_utilisateur = $user_id";
$result = mysqli_query($connexion, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);

    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modify'])) {
        // Vérifier que tous les champs requis sont présents et non vides
        if (
            !empty($_POST['name']) &&
            !empty($_POST['firstname']) &&
            !empty($_POST['email']) &&
            !empty($_POST['password']) &&
            !empty($_POST['password2']) &&
            ($_POST['password'] === $_POST['password2']) // Vérifier que les mots de passe sont identiques
        ) {
            // Récupérer les nouvelles données du formulaire
            $newName = mysqli_real_escape_string($connexion, $_POST['name']);
            $newFirstname = mysqli_real_escape_string($connexion, $_POST['firstname']);
            $newEmail = mysqli_real_escape_string($connexion, $_POST['email']);
            $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Mettre à jour les informations de l'utilisateur dans la base de données
            $updateQuery = "UPDATE UTILISATEUR SET nom_utilisateur = '$newName', prenom_utilisateur = '$newFirstname', email_utilisateur = '$newEmail', mot_de_passe_utilisateur = '$newPassword' WHERE id_utilisateur = $user_id";
            $updateResult = mysqli_query($connexion, $updateQuery);

            if ($updateResult) {
                // Redirection vers la page du profil avec un message de succès, si nécessaire
                header('Location: ../views/profilView.php?success=1');
                exit();
            } else {
                echo "Erreur lors de la mise à jour : " . mysqli_error($connexion);
            }
        } else {
            echo "Tous les champs du formulaire doivent être remplis et les mots de passe doivent être identiques.";
        }
    }

    // Fermer la connexion
    mysqli_close($connexion);
} else {
    echo "Erreur lors de la requête : " . mysqli_error($connexion);
    exit();
}
?>
