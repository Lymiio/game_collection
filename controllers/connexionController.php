<?php
session_start();

// Vérification si le formulaire a été soumis
if (isset($_POST['email']) && isset($_POST['password'])) {
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

    // Préparation de la requête SQL pour vérifier les informations d'identification
    $email = mysqli_real_escape_string($connexion, $_POST['email']);
    $query = "SELECT * FROM UTILISATEUR WHERE email_utilisateur = '$email'";
    $result = mysqli_query($connexion, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        // Vérification du mot de passe
        if ($user && password_verify($_POST['password'], $user['mot_de_passe_utilisateur'])) {
            // Authentification réussie
            $_SESSION['user_id'] = $user['id_utilisateur'];

            // Redirection vers la page suivante (par exemple, dashboard.php)
            header('Location: ../views/global.php');
            exit();
        } else {
            // Authentification échouée
            echo 'Identifiants incorrects';
        }
    } else {
        echo "Erreur lors de la requête : " . mysqli_error($connexion);
    }

    // Fermer la connexion
    mysqli_close($connexion);
}
?>