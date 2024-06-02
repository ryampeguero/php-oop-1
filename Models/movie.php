<?php
require_once __DIR__ . "/genre.php";
class Movie
{
    //Attributi
    private string $title;
    private string $description;
    private string $poster;
    private array $cast;

    public function __construct()
    {
        $this->poster = "./img/blank_poster.jpg";
    }
    //Metodi Set
    public function setTitle($title){
        $this->title = $title;
    }

    public function setDescr($description){
        $this->description = $description;
    }
    
    public function setPoster($poster){
        $this->poster = $poster;
    }

    public function setCast(){

    }

    //Metodi Get
    public function getTitle(){
        return $this->title;
    }
    
    public function getDescr(){
        return $this->description;
    }

    public function getPoster(){
        return $this->poster;
    }

}
