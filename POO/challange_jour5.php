<?php

/* Challenge 1 & 2 : Classe Voiture avec contrôle de vitesse */
class Voiture {
    public $marque;
    private $vitesse = 0; 

    public function getVitesse() {
        return $this->vitesse;
    }

    public function setVitesse($v) {
        if ($v >= 0) {
            $this->vitesse = $v;
        } else {
            echo "Erreur : La vitesse ne peut pas être négative.<br>";
        }
    }
}

/* Challenge 3 : Classe CompteBancaire */
class CompteBancaire {
    private $solde = 0;

    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function retirer($montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Retrait impossible : solde insuffisant ou montant invalide.<br>";
        }
    }

    public function getSolde() {
        return "Votre solde est de : " . $this->solde . "€<br>";
    }
}
$monCompte = new CompteBancaire();
$monCompte->deposer(100);
$monCompte->retirer(150); 
echo $monCompte->getSolde();
?>