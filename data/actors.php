<?php

include_once __DIR__ . '/../models/actor.php';

$actor1 = new Actor('Jason', 'Statham', 'British', 44);
$actor2 = new Actor('Dwayne', 'Johnson', 'American', 42);

$array_actors = [$actor1, $actor2];
