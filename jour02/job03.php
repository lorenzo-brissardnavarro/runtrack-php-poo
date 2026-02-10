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

    function setTitre(string $newTitre): void{
        $this->titre = $newTitre;
    }

    function setAuteur(string $newAuteur): void{
        $this->auteur = $newAuteur;
    }

    function setPages(int $newPages): bool{
        if($newPages > 0){
            $this->nbPages = $newPages;
            return True;
        } else {
            return False;
        }
        
    }

    function verification(): bool{
        if($this->disponible){
            return True;
        } else{
            return False;
        }
    }

    function emprunter(): bool{
        if($this->verification()){
            $this->disponible = False;
            return True;
        } else{
            return False;
        }
    }

    function rendre(): bool{
        if(!$this->verification()){
            $this->disponible = True;
            return True;
        } else {
            return False;
        }
    }
}

$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 93);
if ($livre->emprunter()) {
    echo "Livre emprunté<br>";
}
if ($livre->rendre()) {
    echo "Livre rendu<br>";
}
    


?>