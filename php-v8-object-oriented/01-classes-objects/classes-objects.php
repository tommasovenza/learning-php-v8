<?php

// importing Video Class
require_once('Video.php');

// learning Classes and Objects
$myFirstVideo = new Video('my first video');

// create new Weapons movie
$weaponsMovie = new Video('weapons');
// set a description
$weaponsMovie->description = 'Maybrook (Pennsylvania), 2:17 del mattino. Diciassette dei diciotto alunni della classe della maestra Justine Gandy lasciano le loro case correndo in maniera insolita, senza meta apparente e senza alcuna costrizione e scompaiono nel nulla.';

// increment views
$weaponsMovie->incrementViews();
$weaponsMovie->incrementViews();
$weaponsMovie->incrementViews();
$myFirstVideo->incrementViews();

// dumping
var_dump($myFirstVideo);
var_dump($weaponsMovie);

// Here another way to create a Video Object through a variable
$className = "Video";

// we need to use always new keyword and pass a title
$pulpMovie = new $className('Pulp Fiction');

// setting description and incrementing views 2 times
$pulpMovie->description = 'A Quentin Tarantino Movie';
$pulpMovie->incrementViews();
$pulpMovie->incrementViews();

var_dump($pulpMovie);
