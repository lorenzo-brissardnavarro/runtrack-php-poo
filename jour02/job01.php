<?php

class Rectangle {
    private int $longueur;
    private int $largeur;

    function __construct(int $longueur, int $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
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

$rectangle = new Rectangle(10,5);
echo("Longueur du rectangle : " . $rectangle->getLongueur() . "<br>");
echo("Largeur du rectangle : " . $rectangle->getLargeur() . "<br>");
$rectangle->setLongueur(8);
$rectangle->setLargeur(3);
echo("Nouvelle Longueur du rectangle : " . $rectangle->getLongueur() . "<br>");
echo("Nouvelle Largeur du rectangle : " . $rectangle->getLargeur() . "<br>");


?>