<?php

class Character
{
    private $_name;
    private $_city;
    private $_life = 100;
    private $_level;
    private $_experience;
    private $_strength;
    private $_damages;

    public function __construct($name, $strength, $city, $damages)
    {
        $this->_name = $name;
        $this->setStrength($strength);
        $this->_city = $city;
        $this->setDamages($damages);
        $this->_experience = 1;

    }

    public function setStrength($strength)
    {
        if (!is_int($strength)) {
            trigger_error("A character's strength must be an integer", E_USER_WARNING);
            return;
        }

        if ($strength < 1 || $strength > 15) {
            trigger_error("A character's strength must be at least 1 and maximum 15", E_USER_WARNING);
            return;
        }

        $this->_strength = $strength;
    }

    public function setDamages($damages)
    {
        if (!is_int($damages)) {
            trigger_error("A character's damages must be an integer", E_USER_WARNING);
            return;
        }

        if ($damages < 1 || $damages > 5) {
            trigger_error("A character's damages must be at least 1 and maximum 5", E_USER_WARNING);
            return;
        }

        $this->_damages = $damages;
    }


    public function talk()
    {
        echo "Hey Buddies ! I am " . $this->_name . " ! ";
        echo "I live in " . $this->_city . ". Nice huh ?!";
        echo "My experience is : " . $this->_experience . "XP ! ";
        echo "My strength is : " . $this->_strength;
        echo "How scary am I ? I can inflict up to " . $this->_damages . "damages ! ";
    }

    public function getExperience()
    {
        echo "My experience is : " . $this->_experience . " XP ! ";
    }
}