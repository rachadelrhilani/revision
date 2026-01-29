<?php

/* Challenge 1 & 2 : Définition de la classe avec attributs et constructeur */
class Voiture {
    public $marque;
    public $modele;
    public $vitesse = 0; 

    // Constructeur (Challenge 2)
    public function __construct($ma_marque, $mon_modele) {
        $this->marque = $ma_marque;
        $this->modele = $mon_modele;
    }

    public function accelerer($valeur) {
        $this->vitesse += $valeur;
        echo "La {$this->marque} accélère. Nouvelle vitesse : {$this->vitesse} km/h.<br>";
    }
}

/* Challenge 3 : Instanciation et test */

$maVoiture = new Voiture("Toyota", "Corolla");
$maVoiture->accelerer(50);

$voitureDeSport = new Voiture("Ferrari", "F40");
$voitureDeSport->accelerer(120);

?>