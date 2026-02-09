<?php

class Point {
    public int $x;
    public int $y;

    function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
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

    function changerX(int $newX){
        $this->x = $newX;
    }

    function changerY(int $newY){
        $this->y = $newY;
    }
}

$point = new Point(4,6);
$point->afficherLesPoints();
$point->afficherX();
$point->afficherY();
$point->changerX(2);
$point->changerY(3);
$point->afficherX();
$point->afficherY();



?>