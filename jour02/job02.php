<?php

class Livre {
    private string $titre;
    private string $auteur;
    private int $nbPages;

    function __construct(string $titre, string $auteur, int $nbPages){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
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
}

$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 93);
echo("Titre du livre : " . $livre->getTitre() . "<br>");
echo("Auteur du livre : " . $livre->getAuteur() . "<br>");
echo("Nombre de pages du livre : " . $livre->getPages() . "<br>");
$livre->setTitre("Les Fleurs du mal");
$livre->setAuteur("Charles Baudelaire");
if (!$livre->setPages(-2)) {
    echo "Le nombre de pages doit être supérieur à 0<br>";
}
$livre->setPages(392);
echo("Nouveau Titre du livre : " . $livre->getTitre() . "<br>");
echo("Nouvel Auteur du livre : " . $livre->getAuteur() . "<br>");
echo("Nouveau Nombre de pages du livre : " . $livre->getPages() . "<br>");


?>