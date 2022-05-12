<?php
$nomPlayer = isset($_GET['search'])? strip_tags($_GET['search']) :'';
$bdd = new PDO("mysql:host=localhost;dbname=autocompletion;charset=utf8",'root','root');
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$sql = "SELECT * FROM nba WHERE nom LIKE '%$nomPlayer%' ORDER BY id DESC";
$result = $bdd->prepare($sql);
$result->execute();
$Players = $result->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../js/header.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/recherche.css">
    <title>Recherche</title>
</head>
<body>
    <?= require_once 'header.php'; ?>
    <main>
        <article>
            <?php
                if(isset($nomPlayer)){
                    foreach($Players as $Player): ?>
                        <a href="lien.php?id=<?= $Player['id']?>"> <?= $Player['nom']; ?></a>
                    <?php endforeach;
                }
            ?>
        </article>
    </main>
</body>
</html>