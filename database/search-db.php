<?php
    $pdo = new PDO('mysql:host=localhost;dbname=francois-niang_autocompletion;charset=utf8', 'francois-niangac', 'automdp', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $recherche = isset($_POST['search'])? strip_tags($_POST['search']) :'';

    $query = $pdo->prepare("SELECT * FROM nba WHERE nom LIKE '%$recherche%' ORDER BY id DESC");
    $query->setFetchMode(\PDO::FETCH_ASSOC);
    $query->execute();
    $user=$query->fetchall();
    echo json_encode($user);
?>