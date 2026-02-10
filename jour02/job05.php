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

    function setMarque(string $newMarque): void{
        $this->marque = $newMarque;
    }

    function setModele(string $newModele): void{
        $this->modele = $newModele;
    }

    function setAnnee(int $newAnnee): void{
        $this->annee = $newAnnee;
    }

    function setKilometres(int $newKilometres): void{
        $this->kilometres = $newKilometres;
    }

    function setReservoir(int $newReservoir): bool{
        if ($newReservoir >= 0) {
            $this->reservoir = $newReservoir;
            return true;
        }
        return false;
    }

    function demarrer(): bool{
        if($this->verifier_plein() > 5){
            $this->en_marche = True;
            return True;
        } else{
            return False;
        }
    }

    function arreter(): void{
        $this->en_marche = False;
    }

    private function verifier_plein(): int{
        return $this->reservoir;
    }
}

$voiture = new Voiture("Peugeot", "Peugeot 208", 2012, 85000);
if($voiture->demarrer()){
    echo("Voiture démarrée !<br>");
} else {
    echo("Voiture à l'arrêt !<br>");
}
$voiture->setReservoir(4);
if($voiture->demarrer()){
    echo("Voiture démarrée !<br>");
} else {
    echo("Voiture à l'arrêt !<br>");
}





?>