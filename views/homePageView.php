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
                <li><a href="global.php"><img src="../assets/img/logo.png" alt="Logo du site"></a></li>
            </ul>
            <ul class="right-items">
                <li><a href="libraryView.php">Ma bibliothèque</a></li>
                <li><a href="addGameFormView.php">Ajouter un jeu</a></li>
                <li><a href="leaderbord.php">Classement</a></li>
                <li><a href="profilView.php">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>
            SALUT USER
            <br> PRÊT A AJOUTER DES
            <br> JEUX A TA COLLECTION ?
        </h1>

        <div class="container">

            <h2 class="heading2">
                Mes jeux
            </h2>

            <div class="games">

                <div class="game">
                    <div class="cover">
                        <img src="../assets/img/zelda.png" alt="Cover du jeu">
                    </div>
                    <div class="overlay"></div>
                    <div class="content-container">
                        <div class="content">
                            <h3 class="heading3">The Legend of Zelda : Breath of the Wild</h3>
                            <p class="description">Ici mettre plateforme</p>
                            <p class="heures">Ici mettre les heures</p>
                        </div>
                    </div>
                </div>

                <div class="game">
                    <div class="cover">
                        <img src="../assets/img/reddead.png" alt="Cover du jeu">
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="game">
                    <div class="cover">
                        <img src="../assets/img/reddead2.png" alt="Cover du jeu">
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="game">
                    <div class="cover">
                        <img src="../assets/img/gta.png" alt="Cover du jeu">
                    </div>
                    <div class="overlay"></div>
                </div>

            </div>

        </div>

    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>