<?php

include_once __DIR__ . '/models/movie.php';
include_once __DIR__ . '/data/movies.php';
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
                <li><strong><?= $key ?></strong> <?= $data ?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>
</body>

</html>