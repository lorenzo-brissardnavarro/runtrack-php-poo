<?php

class Personnage {

    public int $x;
    public int $y;

    function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
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

$pers = new Personnage(2,5);
foreach ($pers->position() as $key => $value) {
    echo $value . "<br>";
}

$pers->gauche();
$pers->haut();

foreach ($pers->position() as $key => $value) {
    echo $value . "<br>";
}



?>