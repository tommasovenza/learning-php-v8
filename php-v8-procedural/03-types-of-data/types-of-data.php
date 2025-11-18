<?php

// forcing using type
declare(strict_types=1);

// define a costant as null
define('NULLED', null);
// define a variable as null
$null = null;

// dumping
var_dump($null) . PHP_EOL;
var_dump('NULLED') . PHP_EOL;

// TYPE Casting
$x = "100";
// to force casting
$x = (int) $x;

var_dump($x) . PHP_EOL;

// defining an array
$list = [100, '100', 'hello!'];

// printing just and element's array
echo $list[2] . PHP_EOL;

// dumping
var_dump($list) . PHP_EOL;
