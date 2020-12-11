<?php

abstract class Animal
{
    protected $_name;
    protected $_words;

    public function __construct($name)
    {
        $this->_name = $name;
        //$this->_words = $words;
    }

    public function talk()
    {
        echo $this->_words;
    }

    /*public function react()
    {
        echo $this->_action;
    }*/
}