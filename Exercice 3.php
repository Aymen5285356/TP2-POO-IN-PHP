<?php
class Etudiant 
{
    private $nom;
    private $notes = [];
    public function __construct($nom) 
    {
        $this->nom = $nom;
    }
    public function ajouterNote($note) 
    {
        $this->notes[] = $note;
    }
    public function moyenne() 
    {
        if (count($this->notes) == 0) return 0;
        return array_sum($this->notes) / count($this->notes);
    }
    public function decision() 
    {
        return ($this->moyenne() >= 10) ? "Admis" : "Ajourné";
    }
    public function __toString() 
    {
        return "Nom: $this->nom |Moyenne:". $this->moyenne()."|Résultat:" .$this->decision();
    }
}

$etudiant = new Etudiant("Mohamed");
$etudiant->ajouterNote(19);
$etudiant->ajouterNote(12);
$etudiant->ajouterNote(14);
echo $etudiant;
?>