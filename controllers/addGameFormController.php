<?php
// Connexion à la base de données (à remplacer par vos informations)
$host = 'localhost';
$dbname = 'game_collection';
$user = 'root';
$password = '';

$connexion = mysqli_connect($host, $user, $password, $dbname);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = mysqli_real_escape_string($connexion, $_POST['name']);
    $publisher = mysqli_real_escape_string($connexion, $_POST['publisher']);
    $outing = mysqli_real_escape_string($connexion, $_POST['outing']);
    $description = mysqli_real_escape_string($connexion, $_POST['description']);
    $url_cover = mysqli_real_escape_string($connexion, $_POST['url_cover']);
    $url_website = mysqli_real_escape_string($connexion, $_POST['url_website']);

    // Construire la chaîne des plateformes sélectionnées
    $plateform = "";
    if (isset($_POST['plateform'])) {
        $plateform = implode(', ', $_POST['plateform']);
    }
    echo $plateform;
    // Insérer les données dans la base de données
    $insertQuery = "INSERT INTO JEU (nom_jeu, editeur_jeu, date_de_sortie_jeu, plateforme_jeu, description_jeu,
                                    couverture_jeu, site_jeu) VALUES ('$name', '$publisher', '$outing', '$plateform',
                                    '$description', '$url_cover', '$url_website')";

    if (mysqli_query($connexion, $insertQuery)) {
        header('Location: ../views/libraryView.php');
    } else {
        echo "Erreur lors de l'ajout du jeu : " . mysqli_error($connexion);
    }
}

// Fermer la connexion
mysqli_close($connexion);
?>
