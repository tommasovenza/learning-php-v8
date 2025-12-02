<?php

use App\Exception\FileReaderException;

// create class
class FileReader
{
    // 
    public function read(string $filename): string
    {
        // if file does not exists
        if (!file_exists($filename)) {
            // throw an error
            throw new FileReaderException();
        }
        echo $filename;
        // read content its content
        return file_get_contents($filename);
    }
}

// create a file
$file = "pippo.txt";
$wrongFile = null;
// echo "file created " . $file;

try {
    // try reading a file
    $reader = new FileReader();
    // read
    $reader->read($file);
} catch (FileReaderException $error) {
    // use my method
    $error->showError();
}
