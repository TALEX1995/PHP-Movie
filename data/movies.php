<?php

include_once __DIR__ . '/../models/movie.php';

$movie1 = new Movie(1, 'Shutter Island', 'thriller', 2010, 5);
$movie2 = new Movie(2, 'The Transporter', 'action', 2002, 5);
$movie3 = new Movie(3, 'Transporter 3', 'action', 2008, 5);

$movie_array = [$movie1, $movie2, $movie3];
