<?php

require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'connexionController';
$pageFile = 'controllers/' . $page . '.php';
$isLoggedIn = isset($_SESSION['user_id']);
if (file_exists($pageFile)) {
    require $pageFile;
}
?>