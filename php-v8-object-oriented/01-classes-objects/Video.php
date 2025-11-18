<?php

// Create Video class
class Video
{
    // variables attributes and properties
    public string $title;

    public string $description;

    public int $views;

    public function __construct()
    {
        echo "costruct a new video..!";
    }
}
