<?php
class Livre 
{
    private $titre;
    private $auteur;
    private $prix;
    public function __construct($titre, $auteur, $prix) 
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }
    public function afficherLivre() 
    {
        echo "Titre:$this->titre, Auteur:$this->auteur, Prix:$this->prix DH <br>";
    }
}
class Bibliotheque 
{
    private $livres = [];
    public function ajouterLivre(Livre $livre) 
    {
        $this->livres[] = $livre;
    }
    public function afficherTousLesLivres() 
    {
        foreach ($this->livres as $livre) 
        {
            $livre->afficherLivre();
        }
    }
}

$biblio = new Bibliotheque();
$biblio->ajouterLivre(new Livre("Harry Potter", "J.K. Rowling", 120));
$biblio->ajouterLivre(new Livre("L'Alchimiste", "Paulo Coelho", 85));
$biblio->afficherTousLesLivres();
?>