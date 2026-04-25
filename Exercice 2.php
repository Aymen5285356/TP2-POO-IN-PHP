<?php
class Produit 
{
    private $nom;
    private $prix;
    private $quantite;
    public function __construct($nom, $prix, $quantite) 
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }
    public function sousTotal() 
    {
        return $this->prix * $this->quantite;
    }
    public function afficher()
    {
        return $this->nom ."| Prix:". $this->prix ."DH |Quantité:". $this->quantite ."|Sous-total:". $this->sousTotal()."DH";
    }
}
class Panier 
{
    private $produits = [];
    public function ajouterProduit(Produit $produit) 
    {
        $this->produits[] = $produit;
    }
    public function totalPanier()
    {
        $total = 0;
        foreach ($this->produits as $produit) 
        {
            $total += $produit->sousTotal();
        }
        return $total;
    }
    public function afficherPanier()
    {
        foreach ($this->produits as $produit) 
        {
            echo $produit->afficher() . "<br>";
        }
        echo "<strong>Total panier:" . $this->totalPanier() . " DH</strong>";
    }
}

$panier = new Panier();
$panier->ajouterProduit(new Produit("Arduino", 100, 3));
$panier->ajouterProduit(new Produit("Motor DC", 35, 2));
$panier->afficherPanier();
?>