<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../views/connexionView.php');
    exit();
}


require_once('../models/homePageModel.php');

$user_id = $_SESSION['user_id'];
$HomePageModel = new HomePageModel();
$games = $HomePageModel->getUserLibrary($user_id);

require_once('../views/homePageView.php');
?>