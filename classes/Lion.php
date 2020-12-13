<?php
class Lion extends Animal{

    public function __construct($name, $words)
    {
        parent :: __construct($name, $words);
    }

    public function eat($target)
    {
        $target->setIsAlive(false);
        echo "<p>" . $this->_name . " mange " . $target->getName() . " ! </p>";
        $target->getIsAlive();
        $this->setIsHungry(false);
    }
}