<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection | Add Game</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/addGameForm.css">
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
                Ajouter un jeu à sa bibliothèque
            </h1>

            <p>Le jeu que vous souhaitez ajouter n'existe pas. Vous pouvez le créer, celui-ci sera automatiquement ajouté a votre bibliothèque !</p>

            <form action="../controllers/addGameFormController.php" method="post">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" placeholder="Nom du jeu" required>

                <div class="break"></div>

                <label for="publisher">Editeur du jeu :</label>
                <input type="text" name="publisher" id="publisher" placeholder="Editeur du jeu" required>

                <div class="break"></div>

                <label for="outing">Sortie du jeu :</label>
                <input type="date" name="outing" id="outing" required>

                <div class="break"></div>

                <label for="plateform">Plateformes :</label>

                <input type="checkbox" name="plateform[]" id="plateform_pc" value="PC">
                <label for="plateform_pc">PC</label>

                <input type="checkbox" name="plateform[]" id="plateform_ps4" value="PS4">
                <label for="plateform_ps4">PS4</label>

                <input type="checkbox" name="plateform[]" id="plateform_xboxone" value="Xbox One">
                <label for="plateform_xboxone">Xbox One</label>

                <input type="checkbox" name="plateform[]" id="plateform_nintendo" value="Nintendo">
                <label for="plateform_nintendo">Nintendo</label>

                <div class="break"></div>

                <label for="description">Description :</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Description du jeu" required></textarea>

                <div class="break"></div>

                <label for="url_cover">URL de la cover du jeu :</label>
                <input type="url" name="url_cover" id="url_cover" placeholder="URL de la cover du jeu" required>

                <div class="break"></div>

                <label for="url_website">URL du site du jeu :</label>
                <input type="url" name="url_website" id="url_website" placeholder="URL du site du jeu" required>

                <div class="break"></div>

                <input class="btn" type="submit" value="Ajouter le jeu">
            </form>

        </div>
    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>