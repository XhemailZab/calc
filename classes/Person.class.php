<?php

class Person
{
    //Properties

    public $name;
    public $eyeColor;
    public $age;

    function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Methods

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
