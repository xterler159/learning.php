<?php

include("./classes/animals.php");

$refuge = new Refuge();

$refuge->addAnimal(new Dog("Elizabeth", 13));
$refuge->addAnimal(new Cat("Soupe", 3));
$refuge->addAnimal(new Cat("Batou", 10));

$refuge->afficherAnimaux();

