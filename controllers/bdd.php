<?php
$serveur = "localhost"; // Le serveur MySQL (généralement "localhost" en local)
$utilisateur = "root"; // L'utilisateur MySQL
$motDePasse = ""; // Mot de passe (laissez vide par défaut)
$baseDeDonnees = "game_collection"; // Le nom de votre base de données

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
echo "Connexion réussie";
?>