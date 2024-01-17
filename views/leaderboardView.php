<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/leaderboard.css">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Game Collection | Leaderboard</title>
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
                <li><a href="leaderboardView.php">Classement</a></li>
                <li><a href="profilView.php">Profil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1 class="heading1">
                Classement des temps passés
            </h1>

            <table>
                <tbody>
                    <tr class="title">
                        <td>Joueur</td>
                        <td>Jeu</td>
                        <td>Temps passé</td>
                    </tr>
                    <?php 
                        require("../controllers/leaderboardController.php");
                        if (!isset($leaderboard)) {
                            echo "Erreur : La variable \$leaderboard n'est pas définie.";
                        } else {
                            foreach ($leaderboard as $entry){ ?>
                            <tr>
                                <td><?php echo($entry['nom_utilisateur']);?></td>
                                <td><?php echo $entry['nom_jeu'] ?></td>
                                <td><?php echo $entry['temps_de_jeu_bibliotheque'] ?> heures</td>
                            </tr>
                        <?php
                            }
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>Game Collection &copy; 2023 - Tous Droits Réservés</p>
    </footer>

</body>

</html>
