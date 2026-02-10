<?php

class Livre {
    private string $titre;
    private string $auteur;
    private int $nbPages;
    private bool $disponible;

    function __construct(string $titre, string $auteur, int $nbPages){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->disponible = True;
    }

    function getTitre(): string{
        return $this->titre;
    }

    function getAuteur(): string{
        return $this->auteur;
    }

    function getPages(): int{
        return $this->nbPages;
    }

    function setTitre(string $newTitre){
        $this->titre = $newTitre;
    }

    function setAuteur(string $newAuteur){
        $this->auteur = $newAuteur;
    }

    function setPages(int $newPages){
        if($newPages > 0){
            $this->nbPages = $newPages;
        } else {
            echo "Le nombre de pages doit être supérieur à 0<br>";
        }
        
    }

    function verification(){
        if($this->disponible){
            echo "Le livre est disponible<br>";
            return True;
        } else{
            echo "Livre non disponible<br>";
            return False;
        }
    }

    function emprunter(){
        if($this->verification()){
            $this->disponible = False;
            echo "Livre emprunté<br>";
            return True;
        } else{
            echo "Impossible d'emprunter un livre non disponible<br>";
            return False;
        }
    }

    function rendre(){
        if($this->verification()){
            $this->disponible = True;
            echo "Livre rendu<br>";
            return True;
        } else {
            echo "Impossible de rendre un livre non emprunté<br>";
            return False;
        }
    }
}

$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 93);
$livre->emprunter();
$livre->rendre();
    


?>