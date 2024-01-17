<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection | Bibliothèque</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/homePage.css">
    <link rel="shortcut icon" href="../assets/img/logo.png">
</head>

<body>

    <header>
        <nav>
            <ul class="left-items">
                <li><a href="homePageView.php"><img src="../assets/img/logo.png" alt="Logo du site"></a></li>
            </ul>
            <ul class="right-items">
                <li><a href="libraryControllers.php">Ma bibliothèque</a></li>
                <li><a href="addGameFormView.php">Ajouter un jeu</a></li>
                <li><a href="leaderbord.php">Classement</a></li>
                <li><a href="profilView.php">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php require_once('../controllers/homePageController.php'); ?>
        <h1>
            SALUT <?php echo $_SESSION['user_name']; ?>
            <br> PRÊT A AJOUTER DES
            <br> JEUX A TA COLLECTION ?
        </h1>

        <div class="container">

            <h2 class="heading2">
                Mes jeux
            </h2>

            <div class="games">
                <?php
                    foreach ($games as $game){ ?>
                    <div class="game">
                        <div class="cover">
                            <img src="<?php echo $game['couverture_jeu']; ?>" alt="Cover du jeu">
                        </div>
                        <div class="overlay"></div>
                        <div class="content-container">
                            <div class="content">
                                <h3 class="heading3"><?php echo $game['nom_jeu']; ?></h3>
                                <p class="description"><?php echo $game['plateforme_jeu']; ?></p>
                                <p class="heures"><?php echo $game['temps_de_jeu_bibliotheque']; ?> H</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>