<?php

// namespace
namespace App\Traits;

// create an Helper Trait
trait Helper
{
    // debug helper function
    public function debug($value = NULL): void
    {
        if ($value) {
            echo "<pre>";
            var_dump($value);
            echo "</pre>";
        } else {
            echo "<pre>";
            var_dump($this);
            echo "</pre>";
        }
    }
}
