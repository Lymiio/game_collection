<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/inscription.css">
    <title>Inscription</title>
</head>

<body>

    <main>

        <div class="container">

            <h1 class="heading1">
                Inscription
            </h1>

            <form action="">

                <label for="name">Nom :</label>
                <input type="text" require>
                <label for="firstname">Prénom :</label>
                <input type="text" require>
                <label for="email">Email :</label>
                <input type="email" require>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" require>
                <label for="password">Confirmer le mot de passe :</label>
                <input type="password" name="password" id="password" require>

                <button type="button">S'inscrire</button>

            </form>

            <a href="connexionView.php">Se connecter</a>

        </div>

    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>