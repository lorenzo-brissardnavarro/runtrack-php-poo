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
        echo "Hello<br>";
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
        echo "Je vais en cours<br>";
    }

    function afficherAgeEleve(): void{
        echo "J'ai " . $this->age . " ans<br>";
    }
}

class Professeur extends Personne{
    private string $matiereEnseignee;

    function __construct(string $matiereEnseignee){
        parent::__construct();
        $this->age = 40;
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(): void{
        echo "Le cours va commencer<br>";
    }

}

$eleve = new Eleve();
$eleve->bonjour();
$eleve->allerEnCours();
$eleve->setAge(15);
$eleve->afficherAge();

$professeur = new Professeur("Informatique");
$professeur->bonjour();
$professeur->enseigner();




?>