<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/inscription.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Game Collection | Inscription</title>
</head>

<body>
    <main>
        <div class="container">
            <h1 class="heading1">Inscription</h1>
            <form action="../controllers/inscriptionController.php" method="POST">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
                <label for="password">Mot de passe :</label>
                <input type="password" name="mdp" id="password">
                <label for="confirm__password">Confirmation du mot de passe :</label>
                <input type="password" name="mdp2" id="confirm__password">
                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </main>
</body>

</html>