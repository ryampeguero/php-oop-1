<?php
class Genre
{
    private array $type;

    public function __construct($type)
    {
        $this->setType($type);
    }

    //Metodi set
    public function setType($type)
    {
        if (strlen($type) > 2)
            $this->type[] = $type;
    }

    //Metodi Get

    public function getType(){
        return $this->type;
    }
}
