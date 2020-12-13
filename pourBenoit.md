Bonjour Benoit

Tu trouveras dans ce dossier les différents fichiers qui m'ont permis de créer mon zoo.

Comme tu nous a encouragés à être créatifs, j'ai essayé d'identifier les différents éléments importants de l'énnoncé
avant de commencer.
Voici ce que j'ai identifié et les réponses que j'y ai apportées :
- __Être capable de créer une collection et d'y insérer des éléments :__\
Lorsque l'utilisateur soumet le formulaire, il est traité par la page zooVisit.php sur laquelle je crée un array 
  itZooAnimals. Ensuite, après avoir vérifié le bon remplissage du formulaire j'instancie un objet animal que je fais
  entrer dans l'array itZooAnimal grâce à la méthode array_push
  

- __Être capable de créer une classe mère abstraite et des classes filles :__\
J'ai créé une class Animal que je crée en utilisant le type abstract. et j'ai fait attention à ce que ses attributs
  aient une visibilité protected afin que les classes filles de Animal puissent puissent en hériter.
  Cette classe mère possède 4 classes filles (Lion, Bat, Koala, Giraffe) qui sont toutes construites en utilisant la 
  "mention" extends Animal.\
  La classe Visitor, elle, n'est pas prévue pour générer des classes-filles, j'ai donc choisi un niveau de visibilité
  private pour ses attributs.
  

- __Être capable de créer et utiliser des méthodes permettant d'accéder à des attributs protégés ou privés d'un objet__\
J'ai utilisé des getters ce sont des méthodes conventionnellement nommées getAttributSouhaité() qui permettent d'accéder
  à des attributs de la classe hors de celle-ci. Par exemple, à la ligne 17 de mon fichier zooVisit.php j'utilise
  la méthode getName() déclarée dans la classe Visitor afin de pouvoir afficher l'attribut protected $_name du visiteur.
  

- __Être capable de créer et utiliser des méthodes permettant de modifier des attributs d'un objet__\
J'ai utilisé des setters, nommées de manière conventielles setAttribute() qui permmetent de modifier des valeurs
  d'attributs de la classe hors de celle-ci. Dans mon fichier Visitor.php, ligne 15, j'utilise un setter : setIsHungry()
  à l'intérieur de la méthode feedAnimal($target). Ainsi l'animal ciblé par la méthode feedAniaml($target) voit la
  valeur de son attribut $_isHungry modifiée pour devennir égale à false.
  

- __Être capable d'utiliser des méthodes d'un objet afin d'en impacter un autre__\
Pour cela j'ai créé des méthodes telles que la méthode feedAnimal($target) dont je parle plus haut. C'est le visiteur
  qui "possède" cette méthode qui, lorsqu'elle est appelée, appelle elle-même une méthode permettant de modifier la 
  valeur de l'attribut $_animalFood du visiteur et une méthode appartenant à un autre objet permettant de modifier la 
  valeur de l'attribut $_isHungry d'un animal. Ainsi un objet $visitor, issu d'une classe Visitor peut avoir un impact
  sur un objet par exemple $bat issu d'une classe Bat, elle même issue d'une classe Animal.
  

À titre personnel, j'ai voulu profiter de cet exercice pour, en plus, générer de l'affichage en HTML avec un peu de CSS,
en effet, je n'avais pas fait ça depuis plusieurs mois donc ça me paraissait bien de m'y re-exercer. J'ai choisi aussi 
de limiter les humains dans ce zoo à un seul visiteur afin de me concentrer sur les différents points qui me 
paraissaient importants. De plus l'ensemble des interactions des es différents objets ne nécessitent pas plus de 
"personnages". 

Malheureusement, ce week-end je n'ai pas pu dégager autant de temps que je l'aurais voulu donc voici les points que
j'aurais voulu avoir le temps d'améliorer dans ce devoir :
 - Je crée des objets en fonction des réponses de l'utilisateur à un formulaire dans le fichier zooVisit.php, pour cela,
   j'utilise une structure conditionnelle IF - ELSE IF - ELSE à l'intérieur de laquelle il y a des répétitions de code. 
   Il aurait été intéressant de pouvoir refactoriser cette partie du code pour obtenir quelque chose de plus élégant.
   
   
- Je n'ai pas eu le temps de me pencher sur le transfert d'animal d'un zoo à un autre. J'ai commencé mon projet en 
  choisissant une façon d'ajouter des animaux à la collection de itZooAnimals qu'il aurait fallu revoir afin d'avoir
  plus d'animaux dans ce tableau et je n'avait plus de temps pour faire cette modification. J'ai aussi manqué de temps
  pour écrire le code nécessaire et le tester mais je pense qu'il aurait fallu copier l'animal voulu dans l'array du zoo
  destinataire puis utiliser la méthode unset(arrayDuZooExpediteur[animalAExpedier]) pour enlever l'animal de l'array de
  son zoo de départ
  
J'espère que je n'ai rien oublié et que tu trouveras mon zoo un peu amusant\
Bonne semaine\
Claire