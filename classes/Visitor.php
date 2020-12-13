<?php

class Visitor {
    private $_name;
    private $_isAlive;
    private $_animalFood = 1;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function feedAnimal($target)
    {
        $target->setIsHungry(false);
        echo "<p>" . $this->_name . " a donné à manger à " . $target->getName() . " ! </p>";
        $this->setAnimalFood();

    }

    public function setAnimalFood()
    {
        $this->_animalFood -=1;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setIsAlive($boolean)
    {
        $this->_isAlive = $boolean;
    }

    public function getIsAlive()
    {
        if ($this->_isAlive) {
            echo "<p>" . $this->_name . " est en vie ! </p>";
        } else {
            echo "<p>" . $this->_name . " est mort ! </p>";
        }
    }

    public function getAnimalFood()
    {
        return $this->_animalFood;
    }
}