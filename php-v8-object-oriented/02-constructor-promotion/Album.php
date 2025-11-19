<?php

// album class
class Album
{
    private $author;

    // Constructor Property Promotion
    public function __construct(
        private string $title,
        private $listens = 0,
    ) {
        // this is now empty
    }

    // public method Get Title
    public function getTitle()
    {
        return $this->title;
    }

    public function incrementListens()
    {
        $this->listens++;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
}
