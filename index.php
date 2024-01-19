<?php
    $artworks = require './oeuvres.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include ('./header.php'); ?>
    <main>
        <div id="liste-oeuvres">
            <?php foreach($artworks as $artwork): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?= $artwork['id'] ?>">
                        <img src="<?= $artwork['image_src'] ?>" alt="<?= $artwork['image_alt'] ?>">
                        <h2><?= $artwork['title'] ?></h2>
                        <p class="description"><?= $artwork['artist'] ?></p>
                    </a>
                </article>
            <?php endforeach ?>
        </div>
    </main>
    <?php include('./footer.php'); ?>
</body>
</html>
