<?php
class LibraryModel
{
    private $host = 'localhost';
    private $dbname = 'game_collection';
    private $user = 'root';
    private $password = '';

    public function getAllGames()
    {
        $connexion = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        if (!$connexion) {
            die("Échec de la connexion : " . mysqli_connect_error());
        }

        $query = "SELECT * FROM JEU";
        $result = mysqli_query($connexion, $query);

        if ($result) {
            $games = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "Erreur lors de la requête : " . mysqli_error($connexion);
            exit();
        }

        mysqli_close($connexion);

        return $games;
    }

    public function searchGames($searchTerm)
    {
        $connexion = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        if (!$connexion) {
            die("Échec de la connexion : " . mysqli_connect_error());
        }

        // Utilisation de la requête préparée pour éviter les attaques par injection SQL
        $query = "SELECT * FROM JEU WHERE nom_jeu LIKE ?";
        $stmt = mysqli_prepare($connexion, $query);

        // Ajouter le % au début et à la fin du terme de recherche pour correspondre à n'importe quelle partie du nom du jeu
        $searchTerm = '%' . $searchTerm . '%';

        mysqli_stmt_bind_param($stmt, "s", $searchTerm);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $games = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "Erreur lors de la requête : " . mysqli_error($connexion);
            exit();
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connexion);

        return $games;
    }
}
?>
