<?php

require_once "Fender.php";
require_once "LesPaul.php";

$lesPaul = new LesPaul('Gibson Les Paul', 'Standard', 'Gold Top');
$stratocaster = new Fender('Stratocaster', 'American Standard', 'Sonic Blue');

var_dump($lesPaul) . PHP_EOL;
var_dump($stratocaster) . PHP_EOL;

$stratocaster->setColor('Olympic White');
$lesPaul->setColor('Black');
$lesPaul->setModel('Black Beauty');

var_dump($stratocaster) . PHP_EOL;
var_dump($lesPaul) . PHP_EOL;

echo "Brand: " . $lesPaul->getBrand() . PHP_EOL;
echo "Brand: " . $stratocaster->getBrand() . PHP_EOL;
echo "Color: " . $stratocaster->getColor() . PHP_EOL;
echo "Color: " . $lesPaul->getColor() . PHP_EOL;
echo "Model: " . $lesPaul->getModel() . PHP_EOL;
echo "Model: " . $stratocaster->getModel() . PHP_EOL;
