<?php
class LeaderboardModel
{
    private $host = 'localhost';
    private $dbname = 'game_collection';
    private $user = 'root';
    private $password = '';

    public function getLeaderboard()
    {
        $connexion = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);

        if (!$connexion) {
            die("Échec de la connexion : " . mysqli_connect_error());
        }

        $user_id = $_SESSION['user_id'];

        $query = "SELECT U.nom_utilisateur, J.nom_jeu, B.temps_de_jeu_bibliotheque
                FROM UTILISATEUR U
                JOIN BIBLIOTHEQUE B ON U.id_utilisateur = B.id_utilisateur
                JOIN JEU J ON J.id_jeu = B.id_jeu
                WHERE U.id_utilisateur = $user_id
                ORDER BY B.temps_de_jeu_bibliotheque DESC";

        $result = mysqli_query($connexion, $query);

        if ($result) {
            $leaderboard = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "Erreur lors de la requête : " . mysqli_error($connexion);
            exit();
        }

        mysqli_close($connexion);

        return $leaderboard;
    }
}
?>
