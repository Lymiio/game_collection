<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="register.php" method="POST">
        <p>Nom :</p>
        <input type="text" name="nom" id="nom">
        <p>Prénom :</p>
        <input type="text" name="prenom" id="prenom">
        <p>Email :</p>
        <input type="email" name="email" id="email">
        <p>Mot de passe :</p>
        <input type="password" name="mdp" id="mdp">
        <p>Confirmation du mot de passe :</p>
        <input type="password" name="mdp2" id="mdp2">
        <br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>