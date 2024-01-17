<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../views/connexionView.php');
    exit();
}

require_once('../models/libraryModel.php');

$libraryModel = new LibraryModel();

// Vérifier si une recherche a été effectuée
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $searchTerm = $_POST['search'];
    $games = $libraryModel->searchGames($searchTerm);
} else {
    // Si aucune recherche n'a été effectuée, afficher tous les jeux
    $games = $libraryModel->getAllGames();
}

require_once('../views/libraryView.php');
?>
