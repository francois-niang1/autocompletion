<?php
$idJoueur = isset($_GET['id'])? strip_tags($_GET['id']) :'';
$bdd = new PDO("mysql:host=localhost;dbname=francois-niang_autocompletion;charset=utf8", 'francois-niangac', 'automdp');
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$sql = "SELECT * FROM nba WHERE id = '$idJoueur'";
$result = $bdd->prepare($sql);
$result->execute();
$Players = $result->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../js/header.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/lien.css">
    <title>Element</title>
</head>
<body>
    <?php
    require_once 'header.php';?>
    <main><?php
        if(isset($idJoueur)){
            foreach($Players as $player): ?>
                <img src="<?= $player['img']; ?>" alt="image joueur">
                <h1><?= $player['nom'] ?></h1>
                <p><?= $player['description'] ?></p>
            <?php endforeach;
        } ?>
    </main>
</body>
</html>