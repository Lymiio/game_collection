<?php
require_once 'database.php';

function encryptPassword($password) {
    $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);
    return $encryptedPassword;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $email = $_POST['email'];
    $prenom = $_POST['prenom'];

    $encryptedPassword = encryptPassword($mdp);

    $query = "INSERT INTO utilisateurs (nom_utilisateur, prenom_utilisateur, email_utilisateur, mot_de_passe_utilisateur) VALUES ('$nom', '$prenom', '$email', '$encryptedPassword')";
    try {
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location: success.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
