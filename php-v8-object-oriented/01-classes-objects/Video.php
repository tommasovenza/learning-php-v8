<?php

// Create Video class
class Video
{
    // variables attributes and properties
    public string $title;

    public string $description = '';

    public int $views = 0;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function setVideoDescription(string $description)
    {
        $this->description = $description;
    }

    public function incrementViews()
    {
        $this->views++;
    }
}
