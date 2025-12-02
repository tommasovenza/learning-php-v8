<?php

// require
require_once "../Exception/ErrorHandler.php";
require_once "../08-abstract-classes-and-methods/LesPaul.php";
// use
use App\Exception\ErrorHandler;

// instanciate a guitar
$newInstrument  = new LesPaul('Gibson Les Paul', 'Standard', 'Gold Top');
var_dump($newInstrument);

// testing
if (!property_exists($newInstrument, 'color')) {
    $error = new ErrorHandler();
    var_dump($error->showError());
} else {
    echo "everything is fine!";
}
