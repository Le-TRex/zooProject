<?php
include './templates/header.php';

spl_autoload_register(function($class_name){
    require './classes/' . $class_name . '.php';
});

//Creating an array to stack the zoo's animals
$itZooAnimals = array();

//Checking if the form is properly filled before doing anything
if (isset($_POST) && !empty($_POST)) {
    //Creating a visitor with the name the visitor put in the index form, removing HTML special characters to prevent
    //form an injection
    $visitor = new Visitor(htmlspecialchars($_POST['visitorName']));
    //Greeting the visitor
    echo "<h2>Bienvenue " . $visitor->getName() . " ! </h2>";


    //Creating an animal depending on the value caught in form :
    if ($_POST['chosenAnimal'] == 'lion' ) {
        echo "<h4>Vous êtes devant un lion &#129409 </h4>";
        $lion = new Lion("Marguerite", "Prosterne toi devant le Roi des Animaux ! ");

        //Pushing the newly created $lion in the $itZooAnimals array
        array_push ($itZooAnimals, $lion);

        //Using a public function (inherited from class Animal) to access to a protected attribute
        echo "<p>" . $lion->getName();
        echo " dit ";
        //Using a public function (inherited from class Animal) to make the lion talk
        echo $lion->talk()  . "</p>";

        //Using if structure to use getIsFed() and eat($target) if the lion is hungry
        if ($lion->getIsIsHungry())
        {
            //echo $lion->getIsFed() displays that the lion is Hungry
            echo $lion->getIsFed();
            //lion->eat($visitor) turns the visitor's isAlive attribute and the lion's isHungry attribute to false.
            // It also displays the living status of the visitor
            echo $lion->eat($visitor); //public function eat($target) is not inherited from class Animal, this means
            // that only objects issued of class Lion can use it.
            //echo $lion->getIsFed() after eating the visitors displays the the lion isn't hungry anymore
            echo $lion->getIsFed();
        }

    } elseif ($_POST['chosenAnimal'] == 'bat') {
        echo "<h4>Vous êtes devant une chauve-souris &#128040 </h4>";
        $bat = new Bat("Ginette", "HIHIHIHIHIHIHIHIHIHIHI");

        //Pushing the newly created $bat in the $itZooAnimals array
        array_push ($itZooAnimals, $bat);

        echo "<p>" . $bat->getName();
        echo " dit ";
        echo $bat->talk()  . "</p>";

        if ($bat->getIsIsHungry()) {
            echo $bat->getIsFed();
            //using $visitor->getAnimalFood() displays how many piece of animal food the visitor owns
            echo $visitor->getName() . " possède " . $visitor->getAnimalFood() . " ration de nourriture." ;
            //using the visitor's public function feedAnimal($target) with the bat as a target sets the hunger status
            // of the bat as false then, displays a message saying that the visitor fed the bat and withdraws 1 to the
            // amount of food that the visitor owns
            echo $visitor->feedAnimal($bat);
            echo $bat->getIsFed();
            echo $visitor->getName() . " possède désormais " . $visitor->getAnimalFood() . " ration de nourriture." ;
        }

    } elseif ($_POST['chosenAnimal'] == 'koala') {
        echo "<h4>Vous êtes devant un koala &#128040</h4>";
        $koala = new Koala("Roger", "My tailor is rich... ");

        //Pushing the newly created $koala in the $itZooAnimals array
        array_push ($itZooAnimals, $koala);

        echo "<p>" . $koala->getName();
        echo " dit ";
        echo $koala->talk()  . "</p>";

        if ($koala->getIsIsHungry()) {
            echo $koala->getIsFed();
            echo $visitor->getName() . " possède " . $visitor->getAnimalFood() . " ration de nourriture." ;
            echo $visitor->feedAnimal($koala);
            echo $koala->getIsFed();
            echo $visitor->getName() . " possède désormais " . $visitor->getAnimalFood() . " ration de nourriture." ;
        }

    } else {
        echo "<h4>Vous êtes devant une girafe &#129426</h4>";
        $giraffe = new Giraffe("Marcel", "Je ne baille jamais ! ");

        //Pushing the newly created $giraffe in the $itZooAnimals array
        array_push ($itZooAnimals, $giraffe);

        echo "<p>" . $giraffe->getName();
        echo " dit ";
        echo $giraffe->talk()  . "</p>";

        if ($giraffe->getIsIsHungry()) {
            echo $giraffe->getIsFed();
            echo $visitor->getName() . " possède " . $visitor->getAnimalFood() . " ration de nourriture." ;
            echo $visitor->feedAnimal($giraffe);
            echo $giraffe->getIsFed();
            echo $visitor->getName() . " possède désormais " . $visitor->getAnimalFood() . " ration de nourriture." ;
        }
    }

}

include './templates/footer.php';