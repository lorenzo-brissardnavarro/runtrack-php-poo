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


    function ajout_plat(string $newPlat, float $newPrix): bool {
        if ($this->statut !== "En cours") {
            return False;
        }
        if ($newPrix > 0) {
            $this->plats[$newPlat] = $newPrix;
            return True;
        }
        return False;
    }

    function annuler_commande(): void {
        $this->statut = "annulée";
    }

    private function total_commande(): float {
        $total = 0;
        foreach ($this->plats as $prix) {
            $total += $prix;
        }
        return $total;
    }

    function prix_tva(): float {
        return $this->total_commande() * 0.20;
    }

    function afficherCommande(): string {
        $chaine = "Commande n°" . $this->num_commande . "<br>";
        $chaine .= "Plats : ";
        foreach ($this->plats as $nom => $prix) {
            $chaine .= $nom . " (" . $prix . " €) ";
        }
        $total = $this->total_commande();
        $tva = $this->prix_tva();
        $chaine .= "<br>Statut : " . $this->statut . "<br>";
        $chaine .= "Total HT : " . $total . "€<br>";
        $chaine .= "TVA : " . $tva . "€<br>";
        $chaine .= "Total TTC : " . ($total + $tva) . " €<br>";
        return $chaine;
    }

}

$commande = new Commande(1);
$commande->ajout_plat("Pâtes", 8);
$commande->ajout_plat("Banane", 4);
$commande->ajout_plat("Chocolat", 6);
echo $commande->afficherCommande();
$commande->annuler_commande();



?>