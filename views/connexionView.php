<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/connection.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Game Collection | Connexion</title>
</head>

<body>
    <main>
        <div class="container">
            <h1 class="heading1">
                Se connecter à Game Collection
            </h1>

            <form action="../controllers/connexionController.php" method="POST">
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>

                <button type="submit">Se connecter</button>
            </form>

            <a href="inscriptionView.php">S'inscrire</a>
        </div>
    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>
</body>

</html>