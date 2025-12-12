<?php

// instantiate two objects that are identical after creating a People Class

class People
{
    // variables
    public string $name;
    public string $age;
    public string $gender;

    // construct
    public function __construct(string $name, string $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}

$person = new People('Tommaso', '42', 'male');
$person2 = new People('Tommaso', '42', 'male');
// identical object pointing to two different spaces in memory
var_dump($person === $person2);

// now space in memory will be the same
$person = $person2;

// so this var_dump will output => true
var_dump($person === $person2); // true //
