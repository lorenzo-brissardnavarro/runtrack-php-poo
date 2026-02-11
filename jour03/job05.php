<?php

class Forme {
    
    function aire(): float{
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

    function aire(): float{
        return $this->longueur * $this->largeur;
    }
}

class Cercle extends Forme {
    public int $radius;

    function __construct(int $radius){
        $this->radius = $radius;
    }

    function aire(): float{
        return pi() * $this->radius * $this->radius;
    }
}

$forme = new Forme();
$rectangle = new Rectangle(10,5);
$cercle = new Cercle(5);
echo "aire de la forme : " . $forme->aire() . "<br>";
echo "aire du rectangle : " . $rectangle->aire() . "<br>";
echo "aire du cercle : " . round($cercle->aire(),2) . "<br>";









?>