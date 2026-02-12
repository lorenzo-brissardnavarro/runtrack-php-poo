<?php

class Carte {
    public string $valeur;
    public string $couleur;

    function __construct(string $valeur, string $couleur){
        $this->valeur = $valeur;
        $this->couleur = $couleur;
    }

    function getValeur(): int{
        if($this->valeur === "as"){
            return 1;
        } elseif($this->valeur === "valet" || $this->valeur === "dame" || $this->valeur === "roi"){
            return 10;
        } else{
            return (int)$this->valeur;
        }
    }


}

class Jeu {
    public array $paquet;
    public array $couleurs;
    public array $valeurs;
    
    function __construct(){
        $this->paquet = [];
        $this->couleurs = ["pique", "coeur", "carreau", "trèfle"];
        $this->valeurs = ["as", "2", "3", "4", "5", "6", "7", "8", "9", "10", "valet", "dame", "roi"];
    }

    function creer_paquet(): array{
        foreach ($this->couleurs as $color) {
            foreach ($this->valeurs as $value) {
                $carte = new Carte($value, $color);
                $this->paquet[] = $carte;
            }
        }
        return $this->paquet;
    }

    function melanger_paquet(): array{
        shuffle($this->paquet);
        return $this->paquet;
    }

    function retirer_carte(): object{
        return array_pop($this->paquet);
    }

}

class Main {
    public array $cartes;

    function __construct(){
        $this->cartes = [];
    }

    function ajout_carte(Carte $newCarte){
        $this->cartes[] = $newCarte;
    }

    function calcul_total(): int{
        $total = 0;
        $nb_as = 0;
        foreach ($this->cartes as $card) {
            if($card->valeur === "as"){
                $nb_as +=1;
            }
            $total += $card->getValeur();
        }
        while ($nb_as > 0 && $total + 10 < 22) {
            $total += 10;
            $nb_as -= 1;
        }
        return $total;
    }

    function total_trop_eleve(): bool{
        if($this->calcul_total() > 21){
            return true;
        } else {
            return false;
        }
    }

    function afficher(): string {
        $resultat = [];
        foreach ($this->cartes as $card) {
            $resultat[] = $card->valeur . " de " . $card->couleur;
        }
        return implode(", ", $resultat);
    }


}


class Joueur {

    public Main $main;

    function __construct(){
        $this->main = new Main();
    }

    function verif_partie(): bool{
        if($this->main->total_trop_eleve()){
            return true;
        } else {
            return false;
        }
    }

    function prendre_carte(Carte $carte): object{
        $this->main->ajout_carte($carte);
        return $this->main;
    }

    function get_total(): int{
        return $this->main->calcul_total();
    }

    function afficher_main(): string {
        return $this->main->afficher();
    }


}

class Croupier extends Joueur {

    function doit_prendre_carte(): bool {
        return $this->get_total() < 17;
    }

}

class Partie {

    public Jeu $jeu;
    public Joueur $joueur;
    public Croupier $croupier;

    function __construct(){
        $this->jeu = new Jeu();
        $this->joueur = new Joueur();
        $this->croupier = new Croupier();
    }

    function initialiser(): void{
        $this->jeu->creer_paquet();
        $this->jeu->melanger_paquet();
        for ($i = 0; $i < 2; $i++) {
            $this->joueur->prendre_carte($this->jeu->retirer_carte());
            $this->croupier->prendre_carte($this->jeu->retirer_carte());
        }
    }

    function tour_joueur(): void {
        $prendre = true;
        while ($prendre) {
            $total = $this->joueur->get_total();
            echo "Main du joueur : " . $this->joueur->afficher_main() . "<br>";
            echo "Vos cartes totalisent : $total<br>";
            if ($this->joueur->verif_partie()) {
                echo "Vous dépassez 21 !<br>";
                return;
            }
            if ($total >= 17) {
                $prendre = false;
                echo "Vous passez votre tour.<br>";
            } else {
                $carte = $this->jeu->retirer_carte();
                $this->joueur->prendre_carte($carte);
                echo "Vous prenez une carte : " . $carte->valeur . " de " . $carte->couleur . "<br>";
            }
        }
        echo "Tour du joueur terminé. Total final : " . $this->joueur->get_total() . "<br>";
    }


    function tour_croupier(): void{
        while ($this->croupier->doit_prendre_carte()) {
            $this->croupier->prendre_carte($this->jeu->retirer_carte());
        }
        echo "Main du croupier : " . $this->croupier->afficher_main() . "<br>";
        echo "Total croupier : " . $this->croupier->get_total() . "<br>";
    }

    function determiner_gagnant(): void{
        $totalJoueur = $this->joueur->get_total();
        $totalCroupier = $this->croupier->get_total();
        echo "Total joueur : $totalJoueur <br>";
        echo "Total croupier : $totalCroupier <br>";
        if ($totalJoueur > 21) {
            echo "Le croupier gagne.";
        } elseif ($totalCroupier > 21) {
            echo "Le joueur gagne.";
        } elseif ($totalJoueur > $totalCroupier) {
            echo "Le joueur gagne.";
        } else {
            echo "Le croupier gagne.";
        }
    }
}

$partie = new Partie();
$partie->initialiser();
$partie->tour_joueur();
$partie->tour_croupier();
$partie->determiner_gagnant();






?>