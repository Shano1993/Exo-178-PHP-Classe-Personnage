<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->nom;
$perso->setnom('Jean-Robert');

echo"<br><br>";



$perso2 = new personnage();
$perso2->nom = "Robert";
echo $perso2->nom;



$perso->walkRight();
$perso->walkLeft();
$perso->walkTop();
$perso->walkBottom();
