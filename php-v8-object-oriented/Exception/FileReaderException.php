<?php

namespace App\Exception;

class FileReaderException extends \Exception
{
    public string $errorMessage = 'File NOT Exists!!!!';

    public function showError(): void
    {
        echo "{$this->errorMessage}";
    }
}
