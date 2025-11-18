<?php

// string
$firstname = 'Name';

$lastname = "Surname";

$fullname = $firstname . ' ' . $lastname;

var_dump($fullname);

// heredoc
$x = 10;
$y = 20;
$z = 30;

$var = <<<HEREDOC
Line {$x}
    Line {$y}
        Line {$z}
HEREDOC;

echo $var;

echo PHP_EOL . PHP_EOL . PHP_EOL;

// nowdoc
$var = <<<'NOWDOC'
Line {$x}
    Line {$y}
        Line {$z}
NOWDOC;

echo $var;
