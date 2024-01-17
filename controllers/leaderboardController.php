<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../views/connexionView.php');
    exit();
}

require_once('../models/leaderboardModel.php');

$leaderboardModel = new LeaderboardModel();
$leaderboard = $leaderboardModel->getLeaderboard();

require_once('../views/leaderboardView.php');
?>
