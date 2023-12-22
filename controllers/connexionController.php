<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilisateur WHERE email_utilisateur = :email AND mot_de_passe_utilisateur = :password";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        header('Location: index.php');
        exit;
    } else {
        $error = "Identifiants invalides";
    }
}

// Afficher le formulaire de connexion
require_once 'connexionView.php';
?>
