<?php

require "../Traits/Helper.php";

// magic methods test
class magic
{
    use App\Traits\Helper;

    // magic property
    public string $magic = 'spell';
};

$magicItem = new Magic();

$magicItem->magic = 'thunder';
$magicItem->notExistingVar = 'I am not existing';

var_dump($magicItem->notExistingVar); // Creation of dynamic property magic::$notExistingVar is deprecated
