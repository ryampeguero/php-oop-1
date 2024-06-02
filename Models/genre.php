<?php
class Genre
{
    private array $genre;

    public function __construct($genre)
    {
        $this->genre[] = $genre;
    }
}
