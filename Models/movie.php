<?php
require_once __DIR__ . "/genre.php";
class Movie
{
    //Attributi
    private string $title;
    private string $description;
    private string $poster;
    private array $cast;
    private Genre $genre;
    public function __construct()
    {
        $this->poster = "./img/blank_poster.jpg";
    }
    //Metodi Set
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescr(string $description)
    {
        $this->description = $description;
    }

    public function setPoster(string $poster)
    {
        $this->poster = $poster;
    }

    public function setCast(string $actor)
    {
        $this->cast[] = $actor;
    }

    public function setGenre($genre_instance){
        $this->genre = $genre_instance;
    }
    //Metodi Get
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescr()
    {
        return $this->description;
    }

    public function getPoster()
    {
        return $this->poster;
    }
}
