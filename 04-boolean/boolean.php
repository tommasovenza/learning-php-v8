<?php

// boolean
/*
    integer: 0, -0 = false
    float: 0.0, -0.0 = false
    string: "", " ", "0", "0" = false
    array: [] = false
    null: null = false
*/

$isActive = true;

var_dump($isActive) . PHP_EOL;

if ($isActive) {
    echo "vero" . PHP_EOL;
} else {
    echo "falso" . PHP_EOL;
}
