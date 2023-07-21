<?php

include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/data/movies.php';
include_once __DIR__ . '/data/actors.php';
include_once __DIR__ . '/models/actor.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class PHP</title>
</head>

<body>
    <?php foreach ($movie_array as $movie) : ?>
        <ul>
            <?php foreach ($movie as $key => $data) : ?>
                <?php if ($key != 'actors') : ?>
                    <li><strong><?= $key ?></strong> <?= $data ?></li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>

    <?php foreach ($movie_array as $movie) : ?>
        <p><?= $movie->getMovieInfo() ?></p>
    <?php endforeach ?>
</body>

</html>