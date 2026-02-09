<?php

class Personne {
    public string $nom;
    public string $prenom;

    function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    function SePresenter(){
        return "Je suis " . $this->prenom . " " . $this->nom . "<br>";
    }
}

$aicha = new Personne("Ouattara", "Aicha");
echo($aicha->SePresenter());

$florian = new Personne("Gelin", "Florian");
echo($florian->SePresenter());


?>