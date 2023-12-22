$sql = "INSERT INTO `utilisateur`(`nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`) VALUES ('Timtig','Le Goat','Timtig.LeGoat@leBGdu53.com','feur');";
$sql .= "INSERT INTO `utilisateur`(`nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`) VALUES ('Coco','Rico','Coco.Rico@leCOQdu53.com','cocorico');";
$sql .= "INSERT INTO `utilisateur`(`nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`) VALUES ('Loloé','Low','Loloé.Low@leLOWdu53.com','low');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully in UTILISATEUR";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `jeu`(`nom_jeu`, `editeur_jeu`, `date_de_sortie_jeu`, `plateforme_jeu`, `description_jeu`, `couverture_jeu`, `site_jeu`) VALUES ('Minecarft','Mojang Studios','2011-11-18','PC','Minecraft est un jeu vidéo de type aventure « bac à sable » (construction complètement libre) développé par le Suédois Markus Persson, alias Notch, puis par la société Mojang Studios. Il s\'agit d\'un univers composé de voxels et généré de façon procédurale, qui intègre un système d\'artisanat axé sur l\'exploitation puis la transformation de ressources naturelles (minéralogiques, fossiles, animales et végétales). ','https://www.minecraft.net/content/dam/games/minecraft/key-art/Games_Subnav_Minecraft-300x465.jpg','https://www.minecraft.net');";
$sql .= "INSERT INTO `jeu`(`nom_jeu`, `editeur_jeu`, `date_de_sortie_jeu`, `plateforme_jeu`, `description_jeu`, `couverture_jeu`, `site_jeu`) VALUES ('Assassin\'s Creed Valhalla','Ubisoft','2020-11-10','PlayStation 5','Assassin\'s Creed Valhalla prend place à la fin du IXe siècle durant les années 872 et 873 dans le cadre des raids vikings en Angleterre. Le joueur incarne Eivor, un viking qui mène ses camarades de Norvège dans des raids et des combats contre le roi Alfred le Grand et les quatre royaumes anglo-saxons : Wessex, Northumbrie, Est-Anglie et Mercie3,4. Valhalla a été conçu depuis le début avec cette notion de héros masculin ou féminin ; le joueur peut donc choisir le genre du personnage. ','https://image.api.playstation.com/vulcan/ap/rnd/202007/0208/Ud7Ikvjoyev61bx3n1PTC9u8.png','https://www.ubisoft.com/fr-fr/game/assassins-creed/valhalla');";
$sql .= "INSERT INTO `jeu`(`nom_jeu`, `editeur_jeu`, `date_de_sortie_jeu`, `plateforme_jeu`, `description_jeu`, `couverture_jeu`, `site_jeu`) VALUES ('Rocket League','Psyonix','2015-07-07','PC','Deux équipes, composées de un à quatre joueurs conduisant des véhicules, s\'affrontent au cours d\'un match afin de frapper un ballon et de marquer dans le but adverse. Les voitures sont équipées de propulseurs (boost) et peuvent sauter, permettant de jouer le ballon dans les airs. Des mises à jour du jeu incluent également d\'autres modes de jeu, se rapprochant du basket-ball ou du hockey sur glace. ','https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Rocket_League_coverart.jpg/640px-Rocket_League_coverart.jpg','https://www.rocketleague.com');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully in JEU";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `bibliotheque`(`temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('12','1','1');";
$sql .= "INSERT INTO `bibliotheque`(`temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('40','1','2');";
$sql .= "INSERT INTO `bibliotheque`(`temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('150','2','3');";
$sql .= "INSERT INTO `bibliotheque`(`temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('95','3','1');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully in BIBLIOTHEQUE";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "game_collection";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, $dbname);

$sql = "CREATE TABLE UTILISATEUR (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50) NOT NULL,
    prenom_utilisateur VARCHAR(50) NOT NULL,
    email_utilisateur VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe_utilisateur VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table UTILISATEUR created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE JEU (
    id_jeu INT AUTO_INCREMENT PRIMARY KEY,
    nom_jeu VARCHAR(100) NOT NULL,
    editeur_jeu VARCHAR(100) NOT NULL,
    date_de_sortie_jeu DATE NOT NULL,
    plateforme_jeu VARCHAR(200) NOT NULL,
    description_jeu VARCHAR(500) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table JEU created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE BIBLIOTHEQUE (
    id_bibliotheque INT AUTO_INCREMENT PRIMARY KEY,
    temps_de_jeu_bibliotheque INT,
    id_utilisateur INT,
    id_jeu INT,
    FOREIGN KEY (id_utilisateur) REFERENCES UTILISATEUR(id_utilisateur),
    FOREIGN KEY (id_jeu) REFERENCES JEU(id_jeu)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table BIBLIOTHEQUE created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "IINSERT INTO `utilisateur`(`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`) VALUES ('1','Timtig','Le Goat','Timtig.LeGoat@leBGdu53.com','feur');

INSERT INTO `utilisateur`(`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`) VALUES ('2','Coco','Rico','Coco.Rico@leCOQdu53.com','cocorico');

INSERT INTO `utilisateur`(`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`) VALUES ('3','Loloé','Low','Loloé.Low@leLOWdu53.com','low');
";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in UTILISATEUR";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `jeu`(`id_jeu`, `nom_jeu`, `editeur_jeu`, `date_de_sortie_jeu`, `plateforme_jeu`, `description_jeu`, `couverture_jeu`, `site_jeu`) VALUES ('1','Minecarft','Mojang Studios','2011-11-18','PC',"Minecraft est un jeu vidéo de type aventure « bac à sable » (construction complètement libre) développé par le Suédois Markus Persson, alias Notch, puis par la société Mojang Studios. Il s'agit d'un univers composé de voxels et généré de façon procédurale, qui intègre un système d'artisanat axé sur l'exploitation puis la transformation de ressources naturelles (minéralogiques, fossiles, animales et végétales). ",'https://www.minecraft.net/content/dam/games/minecraft/key-art/Games_Subnav_Minecraft-300x465.jpg','https://www.minecraft.net');
    INSERT INTO `jeu`(`id_jeu`, `nom_jeu`, `editeur_jeu`, `date_de_sortie_jeu`, `plateforme_jeu`, `description_jeu`, `couverture_jeu`, `site_jeu`) VALUES ('2',"Assassin's Creed Valhalla",'Ubisoft','2020-11-10','PlayStation 5',"Assassin's Creed Valhalla prend place à la fin du IXe siècle durant les années 872 et 873 dans le cadre des raids vikings en Angleterre. Le joueur incarne Eivor, un viking qui mène ses camarades de Norvège dans des raids et des combats contre le roi Alfred le Grand et les quatre royaumes anglo-saxons : Wessex, Northumbrie, Est-Anglie et Mercie3,4. Valhalla a été conçu depuis le début avec cette notion de héros masculin ou féminin ; le joueur peut donc choisir le genre du personnage. ",'https://image.api.playstation.com/vulcan/ap/rnd/202007/0208/Ud7Ikvjoyev61bx3n1PTC9u8.png','https://www.ubisoft.com/fr-fr/game/assassins-creed/valhalla');
    INSERT INTO `jeu`(`id_jeu`, `nom_jeu`, `editeur_jeu`, `date_de_sortie_jeu`, `plateforme_jeu`, `description_jeu`, `couverture_jeu`, `site_jeu`) VALUES ('3',"Rocket League",'Psyonix','2015-07-07','PC',"Deux équipes, composées de un à quatre joueurs conduisant des véhicules, s'affrontent au cours d'un match afin de frapper un ballon et de marquer dans le but adverse. Les voitures sont équipées de propulseurs (boost) et peuvent sauter, permettant de jouer le ballon dans les airs. Des mises à jour du jeu incluent également d'autres modes de jeu, se rapprochant du basket-ball ou du hockey sur glace. ",'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Rocket_League_coverart.jpg/640px-Rocket_League_coverart.jpg','https://www.rocketleague.com');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in JEU";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `bibliotheque`(`id_bibliotheque`, `temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('1','12','1','1');
INSERT INTO `bibliotheque`(`id_bibliotheque`, `temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('2','40','1','2');
INSERT INTO `bibliotheque`(`id_bibliotheque`, `temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('3','150','2','3');
INSERT INTO `bibliotheque`(`id_bibliotheque`, `temps_de_jeu_bibliotheque`, `id_utilisateur`, `id_jeu`) VALUES ('4','95','3','1');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in BIBLIOTHEQUE";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>