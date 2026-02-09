<?php

class Personnage {

    public int $x;
    public int $y;

    function __construct(){
        $this->x = 2;
        $this->y = 5;
    }

    function position(){
        return [$this->x,  $this->y];
    }

    function gauche(){
        $this->x -= 1;
    }

    function droite(){
        $this->x += 1;
    }

    function haut(){
        $this->y += 1;
    }

    function bas(){
        $this->y -= 1;
    }

}

$pers = new Personnage();
foreach ($pers->position() as $key => $value) {
    echo $value . "<br>";
}

$pers->gauche();
$pers->haut();

foreach ($pers->position() as $key => $value) {
    echo $value . "<br>";
}



?>