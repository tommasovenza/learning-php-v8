<?php

// scope
$globalVar = 10;

// other global variable
$otherGlobalVar = 200;

function testGlobal()
{

    global $otherGlobalVar;

    $globalVar = 13;

    echo 'LOCAL SCOPE: ' .  $globalVar . PHP_EOL;

    // dump GLOBALS array with all globals variables
    var_dump($GLOBALS);

    // dumping only $globalVar
    var_dump($GLOBALS['globalVar']);

    // now this var is accessible inside local scope
    var_dump($otherGlobalVar);
}

testGlobal();

echo 'GLOBAL SCOPE: ' .  $globalVar . PHP_EOL;
