<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <script  type="text/javascript" src="js/script.js"></script>
    <title>Accueil</title>
</head>
<body>
    <main>
        <h1>Cherchez vos NBA All stars Préférés !!!</h1>
        <form action="view/recherche.php" method="get">
            <section class="search-container">
                <input type="text" name="search" id="player" placeholder="Rechercher un Joueur de NBA">
                <article class="suggestions">
                    <ul></ul>
                </article>
            </section>
        </form>
    </main>
    <?php require_once('view/footer.php')?>
</body>
</html>