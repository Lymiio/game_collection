<?php
class UpdateGameModel
{
    private $host = 'localhost';
    private $dbname = 'game_collection';
    private $user = 'root';
    private $password = '';

    public function getGameById($gameId)
    {
        $connexion = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        if (!$connexion) {
            die("Échec de la connexion : " . mysqli_connect_error());
        }

        $query = "SELECT * FROM JEU WHERE id_jeu = ?";
        $stmt = mysqli_prepare($connexion, $query);

        mysqli_stmt_bind_param($stmt, "i", $gameId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $game = mysqli_fetch_assoc($result);
        } else {
            echo "Erreur lors de la requête : " . mysqli_error($connexion);
            exit();
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connexion);

        return $game;
    }
}
?>
