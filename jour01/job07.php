<?php

class Cercle{

    public int $rayon;

    function __construct(int $rayon){
        $this->rayon = $rayon;
    }

    function changerRayon($newRayon){
        $this->rayon = $newRayon;
    }

    function diametre(){
        return $this->rayon * 2;
    }

    function circonference(){
        return round($this->diametre() * pi(), 4);
    }

    function aire(){
        return round(pi() * ($this->rayon)**2, 3);
    }

    function afficherInfos(){
        echo "Rayon du cercle : " . $this->rayon . "<br>";
        echo "Aire du cercle : " . $this->aire() . "<br>";
        echo "Diametre du cercle : " . $this->diametre() . "<br>";
        echo "Circonférence du cercle : " . $this->circonference() . "<br>";
    }
    
}

$cercle1 = new Cercle(2);
echo("Rayon de base = " . $cercle1->rayon . "<br>");
$cercle1->changerRayon(4);
echo("Rayon après changement = " . $cercle1->rayon . "<br>");
echo("Pour un rayon de " . $cercle1->rayon . ", le diametre est de " . $cercle1->diametre() . "<br>");
echo("Pour un rayon de " . $cercle1->rayon . ", l'aire est de " . $cercle1->aire() . "<br>");
echo("Pour un rayon de " . $cercle1->rayon . ", la circonférence est de " . $cercle1->circonference() . "<br>");


$cercle2 = new Cercle(7);
$cercle2->afficherInfos();

?>