<?php

class Personne {
    public int $age;

    function __construct(){
        $this->age = 14;
    }

    function afficherAge(): string{
        return (string)$this->age;
    }

    function bonjour(): string{
        return "Hello";
    }

    function setAge($newAge): void{
        $this->age = $newAge;
    }
}

class Eleve extends Personne{

    function __construct(){
        parent::__construct();
    }

    public function allerEnCours(): string{
        return "Je vais en cours";
    }

    function afficherAge(): string{
        return "J'ai " . $this->age . " ans";
    }
}

class Professeur extends Personne{
    private string $matiereEnseignee;

    function __construct(string $matiereEnseignee){
        parent::__construct();
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(): string{
        return "Le cours va commencer";
    }

}

$personne = new Personne();
$eleve = new Eleve();
echo $eleve->afficherAge();












?>