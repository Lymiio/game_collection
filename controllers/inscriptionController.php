<?php
// Connexion à la base de données (à remplacer par vos informations)
$host = 'localhost';
$dbname = 'game_collection';
$user = 'root';
$password = '';

$connexion = mysqli_connect($host, $user, $password, $dbname);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];
$confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

// Vérifier si les mots de passe correspondent
if ($mot_de_passe !== $confirmation_mot_de_passe) {
    echo "Erreur : Les mots de passe ne correspondent pas.";
} else {
    try{
        // Hachage du mot de passe
        $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Vérifier si l'email existe déjà dans la base de données
        $verification_requete = "SELECT * FROM UTILISATEUR WHERE email_utilisateur='$email'";
        $resultat_verification = mysqli_query($connexion, $verification_requete);

        if (mysqli_num_rows($resultat_verification) > 0) {
            // L'email existe déjà, renvoyer une erreur ou rediriger vers une page d'erreur
            echo "Erreur : Cet email est déjà enregistré.";
        } else {
            // L'email n'existe pas, procéder à l'inscription
            $requete = "INSERT INTO UTILISATEUR (nom_utilisateur, prenom_utilisateur, email_utilisateur, mot_de_passe_utilisateur) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe_hache')";

            if (mysqli_query($connexion, $requete)) {
                header('Location: ../views/connexionView.php');
                exit(); // Assurez-vous d'ajouter exit() après la redirection
            } else {
                echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
            }
        }
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}

// Fermer la connexion
mysqli_close($connexion);
?>