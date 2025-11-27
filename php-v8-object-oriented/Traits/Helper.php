<?php

// namespace
namespace App\Traits;

// create an Helper Trait
trait Helper
{
    // debug helper function
    public function debug($value): void
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
}
