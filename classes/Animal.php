<?php

abstract class Animal
{
    protected $_name;
    protected $_words;
    protected $_isHungry = true;

    public function __construct($name, $words)
    {
        $this->_name = $name;
        $this->_words = $words;
    }

    public function talk()
    {
        echo $this->_words;
    }

    public function setIsHungry($boolean)
    {
        $this->_isHungry = $boolean;
    }

    public function getIsIsHungry()
    {
        return $this->_isHungry;
    }

    public function getIsFed()
    {
        if ($this->getIsIsHungry()) {
            return "<p>" . $this->_name . " a faim . </p>";
        } else {
            return "<p>" . $this->_name . " n'a plus faim . </p>";
        }
    }

    public function getName()
    {
        return $this->_name;
    }
}