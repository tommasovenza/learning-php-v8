<?php

// set a namespace
namespace App\Typology;

// create Video class
class Video
{
    // set some constants
    public const TYPE_STANDARD = 'standard';
    // other constant
    public const TYPE_SHORT = 'short';

    public string $typology;

    // Constructor with Property Promotion
    public function __construct(public string $videoTitle) {}

    public function setTypology(string $typology): self
    {
        // set typology
        $this->typology = $typology;
        // return Video Class
        return $this;
    }
}
