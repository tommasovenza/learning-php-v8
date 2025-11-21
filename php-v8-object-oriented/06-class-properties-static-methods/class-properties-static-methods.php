<?php

// importing file 
require_once "Video/video.php";
// importing class
use App\Video\Video;

// set a movie
$wrongMovie = new Video('Visions');
// dump
var_dump($wrongMovie) . PHP_EOL;

// changing its title
$movie = $wrongMovie->changeTitle('Ex Machina');
// accessing a static variable through this syntax => $counter var
var_dump(App\Video\Video::$counter) . PHP_EOL;
// dumping an object
var_dump($wrongMovie) . PHP_EOL;
// dumping a string
var_dump($movie) . PHP_EOL;

$newVideo = new Video('Match Point');
// accessing static variable counter
var_dump($newVideo::$counter);
// accessing static variable counter
var_dump($wrongMovie::$counter);
// dumping new video title
var_dump($newVideo->getTitle());
