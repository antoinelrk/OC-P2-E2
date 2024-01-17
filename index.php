<?php
    $artworks = require './oeuvres.php';
    include('./header.php');
?>
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
<?php
    include('./footer.php');
?>
