<?php
class Actor
{
    private string $name;
    private string $surname;
    private string $gender;
    private string $role;

    //Constructor
    public function __construct($name, $surname, $gender, $role)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setGender($gender);
        $this->setRole($role);
    }

    //Metodi Set
    public function setName(string $name)
    {
        if (strlen($name) > 2)
            $this->name = $name;
    }

    public function setSurname(string $surname)
    {
        if (strlen($surname) > 2)
            $this->surname = $surname;
    }

    public function setGender(string $gender)
    {
        if ($gender == "M" || $gender == "F") {
            $this->gender = $gender;
        }
    }
    
    public function setRole(string $role)
    {
        if (strlen($role) > 2)
            $this->role = $role;
    }


    //Metodi Get
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }
    public function getGender()
    {
        return $this->gender;
    }

    public function getFullName()
    {
        return $this->name . " " . $this->surname;
    }
}
