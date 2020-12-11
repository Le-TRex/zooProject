<?php
class Giraffe extends Animal {
    public function __construct($name, $words)
    {
        parent :: __construct($name, $words);
    }
    public function getName()
    {
        return $this->_name;
    }
}