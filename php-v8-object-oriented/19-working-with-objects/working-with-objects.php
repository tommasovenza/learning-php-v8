<?php

// instantiate two objects that are identical after creating a People Class
class People
{
    // variables
    public string $name;
    public string $age;
    public string $gender;
    public string $workId;

    // construct
    public function __construct(string $name, string $age, string $gender, string $workId = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->workId = $workId;
    }

    public function __clone(): void // Clone Magic Method must return void
    {
        if ($this->workId !== '') {
            $this->workId = $this->workId . '-' . rand(0, 9999);
        }
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

// clone an object, set an object to clone
$newPeople = new People('Mario', '20', 'Male');
// clone newPeople
$cloned = clone($newPeople);

var_dump($newPeople);
var_dump($cloned);

var_dump($newPeople == $cloned); // true => 'cause items are the same
var_dump($newPeople === $cloned); // false => 'cause, in this case, space in memory is different

// ***** Testing Clone Magic Method ***** //

// we use this magic method to keep some properties unique when we cloned. so items will be different in some way if we need
// so trying to test Clone Magic Method

$personWithId = new People('Tommino', '42', 'male', '001');
$clonedTommino = clone($personWithId);

var_dump($personWithId);
var_dump($clonedTommino); // this cloned items now has a different WorkId than its previous value

// ***** Testing Serialize an Object ***** //

// create a serialized object
$serializedItem = serialize($clonedTommino);
var_dump($serializedItem);

// trying to revert and getting object unserialized again
$unserializedItem = unserialize($serializedItem);
var_dump($unserializedItem);
