<?php

class Animal {
    public int $age;
    public string $prenom;

    function __construct(){
        $this->age = 0;
        $this->prenom = "";
    }

    function vieillir(){
        $this->age += 1;
    }

    function nommer(string $newName){
        $this->prenom = $newName;
    }
}

$jaguar = new Animal();
echo("Age au départ : " . $jaguar->age . " an <br>");
$jaguar->vieillir();
echo("Age après 1 an : " . $jaguar->age . " ans <br>");
$jaguar->vieillir();
echo("Age après 2 ans : " . $jaguar->age . " ans <br>");
$jaguar->nommer("Jarguey");
echo("L'animal se nomme " . $jaguar->prenom);



?>