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

$string = 'I am a var to debug';

$test = new TestingHelper('testing item');
$test->debug($string);
