<?php

require_once "../Exception/ReadNumber.php";

use App\Exception\ReadNumber;

$number = 100;
$nan = 'I am a string NOT a Number';

$reader = new ReadNumber();

try {
    //try...
    $reader->readNumber($nan);
} catch (ReadNumber $e) {
    // show message
    $e->getErrorMessage();
    echo $e->test();
}
