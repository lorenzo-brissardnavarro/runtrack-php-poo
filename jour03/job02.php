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
        return "Hello<br>";
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
        return "Je vais en cours<br>";
    }

    function afficherAge(): string{
        return "J'ai " . $this->age . " ans<br>";
    }
}

class Professeur extends Personne{
    private string $matiereEnseignee;

    function __construct(string $matiereEnseignee){
        parent::__construct();
        $this->age = 40;
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(): string{
        return "Le cours va commencer<br>";
    }

}

$eleve = new Eleve();
echo $eleve->bonjour();
echo $eleve->allerEnCours();
$eleve->setAge(15);
echo $eleve->afficherAge();

$professeur = new Professeur("Informatique");
echo $professeur->bonjour();
echo $professeur->enseigner();




?>