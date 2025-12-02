<?php

namespace App\Exception;

use Exception;

class ErrorHandler extends Exception
{
    // show an error to user
    public function showError(): void
    {
        throw new Exception('I am an error');
    }
}
