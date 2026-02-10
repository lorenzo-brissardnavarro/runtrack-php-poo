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

    function getCredits(): int{
        return $this->nbCredits;
    }


    function setNom(string $newNom): void{
        $this->nom = $newNom;
    }

    function setPrenom(string $newPrenom): void{
        $this->prenom = $newPrenom;
    }

    function setNumero(int $newNum): void{
        $this->numero = $newNum;
    }

    function add_credits(int $newCredits): bool{
        if($newCredits > 0){
            $this->nbCredits += $newCredits;
            $this->level = $this->studentEval();
            return True;
        } else {
            return False;
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

    function studentInfo(): string{
        return "Nom = " . $this->nom . "<br> Prénom = " . $this->prenom . "<br> id = " . $this->numero . "<br> Niveau = " . $this->level . "<br>";
    }
}

$etudiant = new Student("Doe", "John", 145);
echo("Nombre de crédits au départ : " . $etudiant->getCredits() . "<br>");
$etudiant->add_credits(-2);
$etudiant->add_credits(1);
echo("Nombre de crédits après 1 tour : " . $etudiant->getCredits() . "<br>");
$etudiant->add_credits(1);
echo("Nombre de crédits après 2 tours : " . $etudiant->getCredits() . "<br>");
$etudiant->add_credits(75);
echo("Nombre de crédits après 3 tours : " . $etudiant->getCredits() . "<br>");
echo($etudiant->studentInfo());




?>