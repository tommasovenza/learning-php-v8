<?php

declare(strict_type=1);

function sum(int $x, int $y): int // PARAMETRI
{
    return $x + $y;
}

var_dump(sum(x: 3, y: 6)); // => ARGOMENTI

// SPLAT OPERATOR
function testSplatOperator(...$numbers): int
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // 
    return $sum;
}

$arrayNum = [100, 200, 300, 400, 500];

var_dump(testSplatOperator(...$arrayNum));
