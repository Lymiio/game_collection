<?php
// Connection to database
$host = 'localhost';
$dbname = 'game_collection';
$user = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Verify connection
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Get data from form
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm__password = $_POST['confirm__password'];

// Verify corresponding passwords
if ($password !== $confirm__password) {
    echo "Erreur : Les mots de passe ne correspondent pas.";
} else {
    try {
        // Hash password
        $hash__password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare request
        $query = "SELECT * FROM UTILISATEUR WHERE email_utilisateur='$email'";
        $result__query = mysqli_query($conn, $query);

        // Check if email already exists
        if (mysqli_num_rows($result__query) > 0) {
            echo "Erreur : Cet email est déjà enregistré.";
        } else {
            // Email doesn't exist, insert data into database
            $insert__query = "INSERT INTO UTILISATEUR (nom_utilisateur, prenom_utilisateur, email_utilisateur, password_utilisateur) VALUES ('$nom', '$prenom', '$email', '$hash__password')";

            if (mysqli_query($conn, $insert__query)) {
                header('Location: ../views/connexionView.php');
                exit();
            } else {
                echo "Erreur lors de l'inscription : " . mysqli_error($conn);
            }
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// Close connection
mysqli_close($connexion);
