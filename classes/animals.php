<?php

abstract class Animal
{
  protected string $nom;
  protected int $age;
  protected string $type;

  public function __construct(string $nom, int $age, string $type)
  {
    $this->nom = $nom;
    $this->age = $age;
    $this->type = $type;
  }

  public function getInfos(): string
  {
    return "Nom: {$this->nom} | Age: {$this->age} | Type: {$this->type}\n";
  }

  public function getNom()
  {
    return $this->nom;
  }

  abstract public function parler(): void;
}

class Dog extends Animal
{
  // on a pas besoin de les re-définir car on les définit déjà dans la class abstraite Animal
//  protected string $nom;
//  protected int $age;

  public function __construct(string $nom, int $age)
  {
    parent::__construct($nom, $age, "Dog");
  }

  public function parler(): void
  {
    echo "Wouf !";
  }
}

class Cat extends Animal
{
  // on a pas besoin de les re-définir car on les définit déjà dans la class abstraite Animal
//  protected string $nom;
//  protected int $age;
//  protected string $type;

  public function __construct($nom, $age)
  {
    parent::__construct($nom, $age, "Cat");
  }

  public function parler(): void
  {
    echo "Miaou !";
  }
}

class Refuge
{
  public array $animals = [];

  public function addAnimal(Animal $animal): void
  {
    $this->animals[] = $animal;
  }

  public function afficherAnimaux(): void
  {
    for ($i = 0; $i < count($this->animals); $i++) {
      // on assigne la valeur dans le tableau
      $animal = $this->animals[$i];

      // on affiche le nom de l'animal en question
      echo $animal->getInfos();
    }
  }
}