<?php

class Produit {

    public string $nom;
    public float $prixHT;
    public int $TVA;

    function __construct(string $nom, float $prixHT){
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = 20;
    }

    function CalculerPrixTTC(){
        return round(($this->prixHT * $this->TVA) / 100 + $this->prixHT, 2);
    }

    function afficher(){
        return [$this->nom, $this->prixHT];
    }

    function afficherNom(){
        return $this->nom;
    }

    function afficherPrixHT(){
        return $this->prixHT;
    }

    function modifierNom($newNom){
        $this->nom = $newNom;
    }

    function modifierPrixHT($newPrixHT){
        $this->prixHT = $newPrixHT;
    }


}

$perceuse = new Produit("Perceuse", 69.99);
echo("Pour un prix de " . $perceuse->prixHT . " euros, le prix total est de " . $perceuse->CalculerPrixTTC() . " euros.<br>");
echo("Nom du produit : " . $perceuse->afficher()[0] . "<br>");
echo("Prix hors taxe du produit : " . $perceuse->afficher()[1] . " euros.<br>");
$perceuse->modifierNom("Perceuse visseuse");
$perceuse->modifierPrixHT(79.99);
echo("Nouveau nom du produit : " . $perceuse->afficherNom() . "<br>");
echo("Nouveau prix hors taxe du produit : " . $perceuse->afficherPrixHT() . " euros.<br>");
echo("Pour un prix de " . $perceuse->prixHT . "euros, le prix total est de " . $perceuse->CalculerPrixTTC() . " euros.<br>");



?>