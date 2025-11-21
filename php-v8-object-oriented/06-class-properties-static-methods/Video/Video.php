<?php

namespace App\Video;

class Video
{
    // static int counter
    public static int $counter = 0;

    public string $videoTitle;

    public function __construct(string $videoTitle)
    {
        $this->videoTitle = $videoTitle;
        // increment
        self::$counter++;
    }

    // return title
    public function getTitle(): string
    {
        return $this->videoTitle;
    }

    // changeTitle
    public function changeTitle(string $newTitle): string
    {
        // set new title
        $this->videoTitle = $newTitle;
        // return new movie title
        return $this->videoTitle;
    }
}
