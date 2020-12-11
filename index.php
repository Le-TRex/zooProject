<?php

include 'templates/header.php';

spl_autoload_register(function($classes) {
    require './classes/' . $classes . '.php';
});

?>
    <h1>Bienvenue à l'IT-Zoo</h1>
    <form action="zooVisit.php" method="POST">
        <label for="visitorName">Bienvenue, quel est votre nom ?</label><br />
        <input type="text" name="visitorName" id="visitorName"><br />
        <label for="chosenAnimal">Quel animal souhaitez-vous observer en premier ?</label><br />
        <select name="chosenAnimal" id="chosenAnimal">
            <option value="lion">Marguerite le lion</option>
            <option value="bat">Ginette la chauve-souris</option>
            <option value="koala">Roger le koala</option>
            <option value="giraffe">Marcel la girafe</option>
        </select><br />
        <input type="submit" value="C'est parti mon kiki !">
    </form>

<?php

/*$Marguerite = new Lion ("Marguerite Le Lion", "Prosterne toi devant ton Roi", "Manger des visiteurs");
$Marguerite ->talk();
$Marguerite ->react();*/



?>




<?php
include 'templates/footer.php';