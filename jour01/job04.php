<?php

class Point {
    public int $x;
    public int $y;

    function __construct(){
        $this->x = 4;
        $this->y = 6;
    }

    function afficherLesPoints(){
        echo "Les coordonnées des points sont (" . $this->x . "," . $this->y . ") <br>"; 
    }

    function afficherX(){
        echo "x = " . $this->x . "<br>";
    }

    function afficherY(){
        echo "y = " . $this->y . "<br>";
    }

    function changerX($newX){
        $this->x = $newX;
    }

    function changerY($newY){
        $this->y = $newY;
    }
}

$point = new Point();
$point->afficherLesPoints();
$point->afficherX();
$point->afficherY();
$point->changerX(2);
$point->changerY(3);
$point->afficherX();
$point->afficherY();



?>