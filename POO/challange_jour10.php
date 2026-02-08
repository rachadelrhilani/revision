<!-- Challenge 1 : Classe abstraite Animal -->
 <?php

abstract class Animal
{
    abstract public function crier();
}
// Challenge 2 : Classes Chien et Chat

class Chien extends Animal
{
    public function crier()
    {
        return "Le chien aboie : Woof !";
    }
}

class Chat extends Animal
{
    public function crier()
    {
        return "Le chat miaule : Miaou !";
    }
}
$chien = new Chien();
echo $chien->crier();

$chat = new Chat();
echo $chat->crier();
// Challenge 3 : Abstraction avec les employés

abstract class Employe
{
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    abstract public function calculerSalaire(): float;
}

class EmployeFixe extends Employe
{
    private float $salaireMensuel;

    public function __construct(string $nom, float $salaireMensuel)
    {
        parent::__construct($nom);
        $this->salaireMensuel = $salaireMensuel;
    }

    public function calculerSalaire(): float
    {
        return $this->salaireMensuel;
    }
}


class EmployeCommission extends Employe
{
    private float $ventes;
    private float $tauxCommission;

    public function __construct(string $nom, float $ventes, float $tauxCommission)
    {
        parent::__construct($nom);
        $this->ventes = $ventes;
        $this->tauxCommission = $tauxCommission;
    }

    public function calculerSalaire(): float
    {
        return $this->ventes * $this->tauxCommission;
    }
}
$emp1 = new EmployeFixe("Ahmed", 5000);
$emp2 = new EmployeCommission("Sara", 20000, 0.1);

echo $emp1->calculerSalaire();
echo $emp2->calculerSalaire();
