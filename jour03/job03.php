<?php

class Rectangle {
    public int $longueur;
    public int $largeur;

    function __construct(int $longueur, int $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    function perimetre(): int{
        return 2 * ($this->longueur + $this->largeur);
    }

    function surface(){
        return $this->longueur * $this->largeur;
    }

    function getLongueur(): int{
        return $this->longueur;
    }

    function getLargeur(): int{
        return $this->largeur;
    }

    function setLongueur(int $newLongueur): void{
        $this->longueur = $newLongueur;
    }

    function setLargeur(int $newLargeur): void{
        $this->largeur = $newLargeur;
    }
}

class Parallelepipede extends Rectangle{
    private int $hauteur;

    function __construct(int $longueur, int $largeur, int $hauteur){
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    function volume(): int{
        return $this->hauteur * $this->longueur * $this->largeur;
    }
}

$rectangle = new Rectangle(10,5);
echo("Longueur du rectangle : " . $rectangle->getLongueur() . "<br>");
echo("Largeur du rectangle : " . $rectangle->getLargeur() . "<br>");
echo("Perimètre du rectangle : " . $rectangle->perimetre() . "<br>");
echo("Surface du rectangle : " . $rectangle->surface() . "<br>");
$rectangle->setLongueur(8);
$rectangle->setLargeur(3);
echo("Nouvelle Longueur du rectangle : " . $rectangle->getLongueur() . "<br>");
echo("Nouvelle Largeur du rectangle : " . $rectangle->getLargeur() . "<br>");
echo("Nouveau Perimètre du rectangle : " . $rectangle->perimetre() . "<br>");
echo("Nouvelle Surface du rectangle : " . $rectangle->surface() . "<br>");

$parallelepipede = new Parallelepipede(10,5,8);
echo("<br>Longueur du parallelepipede : " . $parallelepipede->getLongueur() . "<br>");
echo("Largeur du parallelepipede : " . $parallelepipede->getLargeur() . "<br>");
echo("Volume du parallelepipede : " . $parallelepipede->volume() . "<br>");
$parallelepipede->setLongueur(8);
$parallelepipede->setLargeur(3);
echo("<br>Nouvelle Longueur du parallelepipede : " . $parallelepipede->getLongueur() . "<br>");
echo("Nouvelle Largeur du parallelepipede : " . $parallelepipede->getLargeur() . "<br>");
echo("Nouveau Volume du parallelepipede : " . $parallelepipede->volume() . "<br>");

?>