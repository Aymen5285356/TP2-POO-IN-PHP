<?php
class Employe 
{
    protected $nom;
    protected $salaire;
    public function __construct($nom, $salaire) 
    {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }
    public function calculerSalaire() 
    {
        return $this->salaire;
    }
}
class Manager extends Employe 
{
    private $prime;
    public function __construct($nom, $salaire, $prime) 
    {
        parent::__construct($nom, $salaire);
        $this->prime = $prime;
    }
    public function calculerSalaire() 
    {
        return $this->salaire + $this->prime;
    }
}

$emp = new Employe("Karim", 8000);
$manager = new Manager("Sara", 12000, 3000);
echo "Salaire Employé :" . $emp->calculerSalaire() . "DH<br>";
echo "Salaire Manager :" . $manager->calculerSalaire() . "DH";
?>