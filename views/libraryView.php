<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection | Bibliothèque</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/library.css">
    <link rel="shortcut icon" href="../assets/img/logo.png">
</head>

<body>

    <header>
        <nav>
            <ul class="left-items">
                <li><a href="homePageView.php"><img src="../assets/img/logo.png" alt="Logo du site"></a></li>
            </ul>
            <ul class="right-items">
                <li><a href="libraryView.php">Ma bibliothèque</a></li>
                <li><a href="addGameFormView.php">Ajouter un jeu</a></li>
                <li><a href="leaderboardView.php">Classement</a></li>
                <li><a href="profilView.php">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container">

            <h1 class="heading1">
                Ajouter un jeu
            </h1>

            <form action="libraryView.php" method="POST">
                <label for="game">Nom du jeu :</label>
                <input type="text" id="game" name="search" placeholder="Nom du jeu">
                <input type="submit" value="Rechercher">
            </form>


            <h2 class="heading2">
                Mes jeux
            </h2>

            <div class="games">
                <?php 
                    require_once('../controllers/libraryController.php');
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
                                <div class="buttons">
                                    <a href="#" class="button">Ajouter à la bibliothèque</a>
                                </div>
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