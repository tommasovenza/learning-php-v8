<?php

// require
require_once "../Traits/Helper.php";

use App\Traits\Helper;

class TestingHelper
{
    // 
    use Helper;

    public $varString;

    // create a variable and using a trait to inspect it
    public function __construct(string $varString)
    {
        $this->varString = $varString;
    }
}
// string
$string = 'I am a var to debug';
// you need an Object from a Class to use a Trait
$test = new TestingHelper('testing item');

// calling on a string
$test->debug($string);
// call debug method on Object
$test->debug();
