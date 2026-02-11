<?php

class Forme {
    
    function aire(): int{
        return 0;
    }
}

class Rectangle extends Forme{
    public int $longueur;
    public int $largeur;

    function __construct(int $longueur, int $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    function aire(): int{
        return $this->longueur * $this->largeur;
    }
}

$forme = new Forme();
$rectangle = new Rectangle(10,5);
echo "aire de la forme : " . $forme->aire() . "<br>";
echo "aire du rectangle : " . $rectangle->aire() . "<br>";





?>