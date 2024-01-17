<?php
require_once('../models/updateGameModel.php');

// Vérifiez si l'identifiant du jeu est présent dans les paramètres GET
if (isset($_GET['id'])) {
    $game_id = $_GET['id'];

    // Utilisez le modèle pour récupérer les informations sur le jeu
    $updateGameModel = new UpdateGameModel();
    $game = $updateGameModel->getGameById($game_id);

    // Vérifiez si le jeu existe
    if (!$game) {
        // Rediriger si le jeu n'est pas trouvé
        header('Location: libraryView.php');
        exit();
    }
} else {
    // Rediriger si l'identifiant du jeu n'est pas présent
    header('Location: libraryView.php');
    exit();
}

require_once('../views/updateGameView.php');
?>
