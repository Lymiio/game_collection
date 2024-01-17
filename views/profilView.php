<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection | Home</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/profil.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Game Collection | Profil</title>
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
                Mon Profil
            </h1>

            <?php
            include('../controllers/profilController.php');
            ?>

            <form action="" method="POST">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" placeholder="Nom" value="<?php echo $user['nom_utilisateur']; ?>">

                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom" value="<?php echo $user['prenom_utilisateur']; ?>">

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $user['email_utilisateur']; ?>">

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe">

                <label for="confirm__password">Confirmer le mot de passe :</label>
                <input type="password" name="confirm__password" id="confirm__password" placeholder="Confirmer le mot de passe">

                <input type="submit" name="modify" id="modify" value="Modifier">
                <input type="submit" name="delete" id="delete" value="Supprimer mon compte">
                <input type="submit" name="logout" id="logout" value="Se déconnecter">
            </form>
        </div>
    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>