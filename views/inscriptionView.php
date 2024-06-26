<!DOCTYPE html>
<html lang="en">

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
            <h2 class="heading1">Inscription</h2>
            <form action="../controllers/inscriptionController.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" required><br>

                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" required><br>

                <label for="email">Email :</label>
                <input type="email" name="email" required><br>

                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" name="mot_de_passe" required><br>

                <label for="confirmation_mot_de_passe">Confirmer le mot de passe :</label>
                <input type="password" name="confirmation_mot_de_passe" required><br>

                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </main>
</body>

</html>