<?php

// create a an anonimous class
$anonymousClass = new class {};

var_dump($anonymousClass);

// create an empty Interface to reference an anonymous Class later on
interface EmptyInterface {};

// create a an anonimous class with costructor and params 
$anonWithConstruct = new class(10, 10) {

    // anomymous params
    public int $anonymousParam1;
    public int $anonymousParam2;

    // construct
    public function __construct($int1, $int2)
    {
        $this->anonymousParam1 = $int1;
        $this->anonymousParam2 = $int2;
    }

    // anonymous method
    public function sumAnonymousParams(): int
    {
        return $this->anonymousParam1 + $this->anonymousParam2;
    }
};

// instantiate an anonymous Class with some params
var_dump($anonWithConstruct);
// dumping a sum method
var_dump($anonWithConstruct->sumAnonymousParams());


// new class
$item = new class(200, 300) implements EmptyInterface {

    public int $param1;
    public int $param2;

    // construct
    public function __construct($int1, $int2)
    {
        $this->param1 = $int1;
        $this->param2 = $int2;
    }

    // anonymous method
    public function sumAnonymousParams(): int
    {
        return $this->param1 + $this->param2;
    }
};

// passing a Class to this function with an Interface Reference
function passingAnonymousClass(EmptyInterface $object)
{
    // dumping anonymous class using Empty Interface as a referecne
    var_dump($object);
}

// testing
passingAnonymousClass($item);
