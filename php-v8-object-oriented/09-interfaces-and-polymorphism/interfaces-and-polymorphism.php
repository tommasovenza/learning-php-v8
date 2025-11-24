<?php

require_once "../Interfaces/Gravity.php";

use App\Intefaces\Gravity;

class Human implements Gravity
{
    public string $name;
    public string $surname;

    // create a new Human
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    // Gravity func to implement
    public function fallToTheGround(): string
    {
        return "I am forced by gravity..!";
    }

    // hello function
    public function hello(): string
    {
        return "Hello from {$this->name}!";
    }
}

class Telephone implements Gravity
{
    // property
    public $telephoneName;

    // create a new telephone item
    public function __construct($telephoneName)
    {
        $this->telephoneName = $telephoneName;
    }

    // Gravity func to implement
    public function fallToTheGround(): string
    {
        return "Craaack..! I'm Probably Broken!";
    }

    public function sound(): string
    {
        return "do do do...";
    }
}

// create some entity
$tommino = new Human('Tommaso', 'Venza');
$iphone = new Telephone('Iphone');

var_dump($tommino->hello()) . PHP_EOL;
var_dump($tommino->fallToTheGround()) . PHP_EOL;
var_dump($iphone->fallToTheGround()) . PHP_EOL;
var_dump($iphone->sound()) . PHP_EOL;
