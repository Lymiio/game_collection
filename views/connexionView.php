<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Game Collection | Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/connection.css">
</head>

<body>
    <main>
        <div class="container">
            <h1 class="heading1">
                Se connecter à Game Collection
            </h1>

            <form action="../controllers/connexionController.php" method="POST">
                <label for="email">Email :</label>
                <input type="text" name="email" required>
                
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>

                <button type="submit">Se connecter</button>
            </form>

            <a href="inscriptionView.php">S'inscrire</a>
        </div>
    </main>

</body>

</html>
