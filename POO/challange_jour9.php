<?php

// Challenge 1 : Classe de base
class Vehicule {
    protected $marque;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    public function demarrer() {
        return "Le véhicule démarre";
    }
}

// Challenge 1 & 2 : Héritage et Redéfinition
class Voiture extends Vehicule {
    public $nombreDePortes;

    public function demarrer() {
        return "La voiture démarre"; 
    }
}

// Challenge 3 : Constructeur parent
class Moto extends Vehicule {
    public function __construct($marque) {
        parent::__construct($marque);
    }
}
