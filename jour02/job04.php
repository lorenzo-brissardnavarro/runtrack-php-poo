<?php

class Student {
    private string $nom;
    private string $prenom;
    private int $numero;
    private int $nbCredits;
    private string $level;

    function __construct(string $nom, string $prenom, int $numero){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numero = $numero;
        $this->nbCredits = 0;
        $this->level = $this->studentEval();
    }

    function getNom(): string{
        return $this->nom;
    }

    function getPrenom(): string{
        return $this->prenom;
    }

    function getNumero(): int{
        return $this->numero;
    }

    function getCredtis(): int{
        return $this->nbCredits;
    }


    function setNom(string $newNom){
        $this->nom = $newNom;
    }

    function setPrenom(string $newPrenom){
        $this->prenom = $newPrenom;
    }

    function setNumero(int $newNum){
        $this->numero = $newNum;
    }

    function setCredits(int $newCredits){
        $this->nbCredits = $newCredits;
    }

    function add_credits(int $newCredits){
        if($newCredits > 0){
            $this->nbCredits += $newCredits;
            $this->level = $this->studentEval();
        } else {
            echo "Le nombre de crédits doit être supérieur à 0<br>";
        }
    }

    private function studentEval(): string{
        if($this->nbCredits >= 90){
            return "Excellent";
        } elseif ($this->nbCredits >= 80 && $this->nbCredits < 90){
            return "Très bien";
        } elseif ($this->nbCredits >= 70 && $this->nbCredits < 80){
            return "Bien";
        } elseif ($this->nbCredits >= 60 && $this->nbCredits < 70){
            return "Passable";
        } else{
            return "Insuffisant";
        }
    }

    function studentInfo(){
        echo("Nom = " . $this->nom . "<br>");
        echo("Prénom = " . $this->prenom . "<br>");
        echo("id = " . $this->numero . "<br>");
        echo("Niveau = " . $this->level . "<br>");
    }
}

$etudiant = new Student("Doe", "John", 145);
echo("Nombre de crédits au départ : " . $etudiant->getCredtis() . "<br>");
$etudiant->add_credits(-2);
$etudiant->add_credits(1);
echo("Nombre de crédits après 1 tour : " . $etudiant->getCredtis() . "<br>");
$etudiant->add_credits(1);
echo("Nombre de crédits après 2 tours : " . $etudiant->getCredtis() . "<br>");
$etudiant->add_credits(75);
echo("Nombre de crédits après 3 tours : " . $etudiant->getCredtis() . "<br>");
$etudiant->studentInfo();




?>