<?php

// integer

$base10 = 90;

var_dump($base10);

$base16 = 0x90;

var_dump($base16);

$base2 = 0b011001;

var_dump($base2);

$integer = 1234567;
$readableInt = 1_234_567;

var_dump($integer);
var_dump($readableInt);

// string with number
$var = '123';
// cast from string to integer
$castedInt = (int)$var;

var_dump($castedInt);
