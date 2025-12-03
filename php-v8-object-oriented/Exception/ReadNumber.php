<?php

namespace App\Exception;

use Exception;

// class ReadNumber
class ReadNumber extends Exception
{
    public string $errorReadNumberMessage = 'This is NOT a number!';

    public function readNumber($number): mixed
    {
        // check if it's a number
        $result = is_int($number);

        if ($result) {
            echo "found a number " . $number;
            // return number
            return $number;
        } else {
            throw new ReadNumber();
        }
    }

    public function getErrorMessage(): void
    {
        echo $this->errorReadNumberMessage;
    }

    public function test(): string
    {
        return "WRONG";
    }
}
