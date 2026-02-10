<?php

class Voiture {
    private string $marque;
    private string $modele;
    private int $annee;
    private int $kilometres;
    private bool $en_marche;
    private int $reservoir;

    function __construct(string $marque, string $modele, int $annee, int $kilometres){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometres = $kilometres;
        $this->en_marche = False;
        $this->reservoir = 50;
    }

    function getMarque(): string{
        return $this->marque;
    }

    function getModele(): string{
        return $this->modele;
    }

    function getAnnee(): int{
        return $this->annee;
    }

    function getKilometres(): int{
        return $this->kilometres;
    }

    function getEnMarche(): bool{
        return $this->en_marche;
    }

    function getReservoir(): int{
        return $this->reservoir;
    }

    function setMarque(string $newMarque){
        $this->marque = $newMarque;
    }

    function setModele(string $newModele){
        $this->modele = $newModele;
    }

    function setAnnee(int $newAnnee){
        $this->annee = $newAnnee;
    }

    function setKilometres(int $newKilometres){
        $this->kilometres = $newKilometres;
    }

    function setEnMarche(bool $newEnMarche){
        $this->en_marche = $newEnMarche;
    }

    function setReservoir(int $newReservoir){
        $this->reservoir = $newReservoir;
    }

    function demarrer(){
        if($this->verifier_plein() > 5){
            $this->en_marche = True;
            echo("Voiture démarrée !<br>");
        } else{
            echo("Voiture à l'arrêt !<br>");
        }
    }

    function arreter(){
        $this->en_marche = False;
    }

    private function verifier_plein(){
        return $this->reservoir;
    }
}

$voiture = new Voiture("Peugeot", "Peugeot 208", 2012, 85000);
$voiture->demarrer();
$voiture->setReservoir(4);
$voiture->demarrer();





?>