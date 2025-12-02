<?php

require "../Traits/Helper.php";

// magic methods test
class magic
{
    use App\Traits\Helper;

    // magic property
    public string $magic = 'spell';

    public function __set($magicName, $magicValue)
    {
        var_dump($magicName, $magicValue);
    }
};

$magicItem = new Magic();

$magicItem->magic = 'thunder';
$magicItem->notExistingVar = 'I am not existing';

var_dump($magicItem->notExistingVar); // Creation of dynamic property magic::$notExistingVar is deprecated

// implemented __set magic method
$magicItem->magic = '⚡️';
var_dump($magicItem);
