<?php

include_once __DIR__ . '/../models/movie.php';
include_once __DIR__ . '/actors.php';

$movie1 = new Movie(1, 'Shutter Island', 'thriller', 2010, 5, $array_actors);
$movie2 = new Movie(2, 'The Transporter', 'action', 2002, 5, $array_actors);
$movie3 = new Movie(3, 'Transporter 3', 'action', 2008, 5, $array_actors);

$movie_array = [$movie1, $movie2, $movie3];


var_dump($movie1);
