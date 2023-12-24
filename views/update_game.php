<!DOCTYPE html>
<html lang="fr">
<?php include('../controllers/bdd.php');?>
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
        <div class="left">

            <div class="container">

                <!--TODO Ajouter le PHP permettant de récupérer le jeu cliqué -->
                <h1 class="heading1">
                    Read Dead Redemption 2
                </h1>

                <!--TODO Ajouter le PHP permettant de récupérer la description du jeu cliqué -->
                <p class="description">Voici la section concernant la description du jeu permettant à l'utilisateur de savoir l'univers du jeu, les tags, et autres informations complémentaires.</p>

                <!--TODO Ajouter le PHP permettant de récupérer le temps joué -->
                <p class="time">
                    Temps de jeu : 20h
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
                <!--TODO Ajouter le PHP permettant de récupérer l'image du jeu cliqué -->
                <img src="../assets/img/RDR2.png" alt="Couverture du jeu">
            </div>
        </div>

    </main>

    <?php
        $requete = "SELECT * FROM JEU";
        $resultat = mysqli_query($connexion, $requete);
        
        // Traiter les résultats
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "Nom: " . $ligne['nom_jeu'] . "<br>";
        }
    ?>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>