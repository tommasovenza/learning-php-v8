<?php

// require Class file with constants
require_once "Typology/Video.php";

// use to refer Video Class Namespace
use App\Typology\Video as Video;

// dumping
// there's no need to have an object to call these constants
var_dump(Video::TYPE_STANDARD) . PHP_EOL;
var_dump(Video::TYPE_SHORT) . PHP_EOL;

// but we could do that
$video = new Video('a new video test');
var_dump($video::TYPE_SHORT) . PHP_EOL;
var_dump($video::TYPE_STANDARD) . PHP_EOL;

// and using magic class constant
var_dump($video::class) . PHP_EOL; // => Fully qualified name

// setting a typology
$video->setTypology('horror');

var_dump($video->typology);
