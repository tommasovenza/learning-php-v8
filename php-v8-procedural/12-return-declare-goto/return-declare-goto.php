<?php

// move here from bottom
declare(strict_types=1);

// RETURN
function concatenate(string $firstStr, string $secondStr): string
{
    // return
    return $firstStr . " " . $secondStr;
    // more code
    "echo" . "I am another string";
}

var_dump(concatenate('ciao', 'Tommaso'));

// TEST => other global return to exit from script file
// return;

// // more code to execute that will be ignored
// echo "more code...";

// DECLARE
// declare(strict_types=1);

function sum(int $num, int $numTwo): int
{
    return $num + $numTwo;
}


// wrong
// var_dump(sum('1', 100));

// correct
var_dump(sum(30, 100));
