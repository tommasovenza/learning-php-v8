<?php

namespace App\Exception;

use Exception;

class ErrorHandler extends Exception
{
    // test
    public function test(): void
    {
        throw new Exception('I am an error');
    }
}
