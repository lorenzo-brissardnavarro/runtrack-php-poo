<?php

class Personne {
    public int $age;

    function __construct(){
        $this->age = 14;
    }

    function afficherAge(): int{
        return $this->age;
    }

    function bonjour(){
        echo "Hello";
    }

    function setAge($newAge): void{
        $this->age = $newAge;
    }
}

class Eleve extends Personne{

    function __construct(){
        parent::__construct();
    }

    public function allerEnCours(){
        echo "Je vais en cours";
    }

    function afficherAgeEleve(): void{
        echo "J'ai " . $this->age . " ans";
    }
}

class Professeur extends Personne{
    private string $matiereEnseignee;

    function __construct(string $matiereEnseignee){
        parent::__construct();
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(){
        echo "Le cours va commencer";
    }

}

$personne = new Personne();
$eleve = new Eleve();
$eleve->afficherAgeEleve();












?>