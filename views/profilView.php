<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection | Home</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/profil.css">
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
        <div class="container">

            <h1 class="heading1">
                Mon Profil
            </h1>

            <form action="">

                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" placeholder="Nom">

                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom">

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="Email">

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe">

                <label for="password2">Confirmer le mot de passe :</label>
                <input type="password" name="password2" id="password2" placeholder="Confirmer le mot de passe">

                <input type="submit" id="modify" value="Modifier">
                <input type="submit" id="delete" value="Supprimer mon compte">
                <input type="submit" id="logout" value="Se déconnecter">

            </form>
        </div>
    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>