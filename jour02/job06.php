<?php

class Commande {
    private int $num_commande;
    private array $plats;
    private string $statut;

    function __construct(int $num_commande){
        $this->num_commande = $num_commande;
        $this->plats = [];
        $this->statut = "En cours";
    }

    function ajout_plat(string $newPlat, int $newPrix){
        array_push($this->plats, ["plat" => $newPlat, "prix" => $newPrix]);
    }

    private function total_commande(){
        $prix = 0;
        foreach ($this->plats as $value) {
            foreach ($value as $key => $valeur) {
                if($key === "prix"){
                    $prix+=$valeur;
                }
            }
        }
        return $prix;
    }

    function afficher_commande(){
        $chaine = '[ ';
        foreach ($this->plats as $value) {
            foreach ($value as $key => $valeur) {
                if($key === "plat"){
                    $chaine .= $valeur . " ";
                }
            }
        }
        $chaine .= '] pour un prix de ' . $this->total_commande() . " euros et le statut de la commande est " . $this->statut . "<br>";
        return $chaine;
    }

    function prix_tva(){
        $prix = $this->total_commande();
        return $prix * 1.2;
    }

    function annuler_commande(){
        $this->plats = [];
    }

}

$commande = new Commande(1);
$commande->ajout_plat("pâtes", 2);
$commande->ajout_plat("banane", 4);
$commande->ajout_plat("chocolat", 6);
echo($commande->afficher_commande());
echo($commande->prix_tva() . " euros");



?>