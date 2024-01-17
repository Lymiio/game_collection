<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/update_game.css">
    <title>Game Collection | Update Game</title>
</head>

<body>

    <header>
        <nav>
            <ul class="left-items">
                <li><a href="global.php"><img src="../assets/img/logo.png" alt="Logo du site"></a></li>
            </ul>
            <ul class="right-items">
                <li><a href="games.php">Ma bibliothèque</a></li>
                <li><a href="games.php">Ajouter un jeu</a></li>
                <li><a href="leaderbord.php">Classement</a></li>
                <li><a href="login.php">Se connecter</a></li>
                <li><a href="register.php">S'inscrire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php require_once('../controllers/updateGameController.php'); ?>
        <div class="left">
            <div class="container">
                <h1 class="heading1">
                    <?php echo $game['nom_jeu']; ?>
                </h1>
                <p class="description"><?php echo $game['description_jeu']; ?></p>
                <p class="time">
                    Temps de jeu : <?php echo $game['temps_de_jeu_bibliotheque']; ?>h
                </p>
                <h1 class="heading2">
                    Ajouter du temps passé au jeu
                </h1>
                <form action="">
                    <label class="label-time" for="time-passed-game">Temps passé sur le jeu</label>
                    <br>
                    <input type="number" min="0" name="time-passed-game" id="time-passed-game" placeholder="Temps passé sur le jeu">
                    <input type="button" class="modify-btn" value="Modifier">
                    <input type="button" class="remove-btn" value="Supprimer">
                </form>
            </div>
        </div>

        <div class="right">
            <div class="cover-game">
                <img src="<?php echo $game['couverture_jeu']; ?>" alt="Couverture du jeu">
            </div>
        </div>
    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>