<?php

// import album
require_once("Album.php");

// create an Album Object
$debut = new Album('Debut');
$grace = new Album('Grace');

// printing title
echo $debut->getTitle() . PHP_EOL;
echo $grace->getTitle() . PHP_EOL;

// set debut album's author
$debut->setAuthor('Bjork');
$grace->setAuthor('Tim Buckley');

// incrementing listens
for ($i = 1; $i < 6; $i++) {
    // 
    $debut->incrementListens();
    // 
    if ($i < 4) {
        $grace->incrementListens();
    }
}

var_dump($debut);
var_dump($grace);
