<?php
include './templates/header.php';

spl_autoload_register(function($class_name){
    require './classes/' . $class_name . '.php';
});

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
        echo "<p>" . $lion->getName() . ":" . $lion->talk() . "</p>";
        echo $lion->eat($visitor);

    } elseif ($_POST['chosenAnimal'] == 'bat') {
        echo "<h4>Vous êtes devant une chauve-souris &#128040 </h4>";
        $bat = new Bat("Ginette", "HIHIHIHIHIHIHIHIHIHIHI");
        echo $bat->talk();

    } elseif ($_POST['chosenAnimal'] == 'koala') {
        echo "<h4>Vous êtes devant un koala &#128040</h4>";
        $koala = new Koala("Roger", "My tailor is rich... ");
        echo $koala->talk();

    } else {
        echo "<h4>Vous êtes devant une girafe &#129426</h4>";
        $giraffe = new Giraffe("Marcel", "Je ne baille jamais ! ");
        echo $giraffe->talk();

    }

    /*echo "$_POST[chosenAnimal]";*/
    }

    include './templates/footer.php';