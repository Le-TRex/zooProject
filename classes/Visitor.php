<?php

class Visitor {
    protected $_name;
    protected $_isAlive;

    public function __construct($name)
    {
        $this->_name = $name;
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
}