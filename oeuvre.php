<?php 
    $artworks = require './oeuvres.php';
    $key = 'id';
    $selectedId = $_GET[$key];
    $redirectToHome = fn() => header('Location: ' . '/');

    if (!$selectedId) $redirectToHome();

    $artwork = reset(array_filter($artworks, fn ($artwork) => $artwork[$key] === intval($selectedId)));

    if (!$artwork) $redirectToHome();

    include('./header.php');
?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?= $artwork['image_src'] ?>" alt="<?= $artwork['image_alt'] ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $artwork['title'] ?></h1>
            <p class="description"><?= $artwork['artist'] ?></p>
            <p class="description-complete"><?= $artwork['description'] ?></p>
        </div>
    </article>
</main>
<?php include ('./footer.php') ?>