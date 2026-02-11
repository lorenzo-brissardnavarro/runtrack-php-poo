<?php


class Vehicule {
    public string $marque;
    public string $modele;
    public int $annee;
    public int $prix;

    function __construct(string $marque, string $modele, int $annee, int $prix){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
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

    function getPrix(): int{
        return $this->prix;
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

    function setPrix(int $newPrix): void{
        $this->prix = $newPrix;
    }

    function demarrer(): string{
        return "Attention, je roule";
    }

    function informationsVehicule(): string {
        $chaine .= "Marque : " . $this->marque . "<br>";
        $chaine .= "Modèle : " . $this->modele . "<br>";
        $chaine .= "Année : " . $this->annee . "<br>";
        $chaine .= "Prix : " . $this->prix . " <br>";
        return $chaine;
    }
}

class Voiture extends Vehicule {

    public int $portes;

    function __construct(string $marque, string $modele, int $annee, int $prix){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = 4;
    }

    function informationsVehicule(): string {
        $chaine = "Infos voiture : <br>";
        $chaine .= "Marque : " . $this->marque . "<br>";
        $chaine .= "Modèle : " . $this->modele . "<br>";
        $chaine .= "Année : " . $this->annee . "<br>";
        $chaine .= "Prix : " . $this->prix . " euros<br>";
        $chaine .= "Portes : " . $this->portes . " <br>";
        return $chaine;
    }

    function demarrer(): string{
        return "La voiture roule<br>";
    }
}

class Moto extends Vehicule {

    public int $roue;

    function __construct(string $marque, string $modele, int $annee, int $prix){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roue = 2;
    }

    function informationsVehicule(): string {
        $chaine = "<br>Infos moto : <br>";
        $chaine .= "Marque : " . $this->marque . "<br>";
        $chaine .= "Modèle : " . $this->modele . "<br>";
        $chaine .= "Année : " . $this->annee . "<br>";
        $chaine .= "Prix : " . $this->prix . " euros<br>";
        $chaine .= "Nombre de roues : " . $this->roue . " <br>";
        return $chaine;
    }

    function demarrer(): string{
        return "La moto roule<br>";
    }
}

$voiture = new Voiture("Mercedes", "Classe A", 2020, 18500, 4);
echo $voiture->informationsVehicule();

$moto = new Moto("Yamaha", "1200 Vmax", 1987, 4500);
echo $moto->informationsVehicule();

echo "<br>" . $voiture->demarrer();
echo $moto->demarrer();

?>