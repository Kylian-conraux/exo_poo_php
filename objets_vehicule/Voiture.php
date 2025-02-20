<?php 

class Voiture extends Quatre_roues{

    private $nombre_pneu_neige;

    public function __construct($couleur, $poids, $nb_portes, $nombre_pneu_neige){
        parent::__construct($couleur, $poids, $nb_portes);
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }

    public function get_nombre_pneu_neige(){
        return $this->nombre_pneu_neige;
    }

    public function set_nombre_pneu_neige($nombre_pneu_neige){
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }

    public function rouler(){
        echo "La voiture roule";
    }

    public function ajouterPersonne($poids){
        Parent::ajouterPersonne($poids);
        $poidsTotal = $this->get_poids();
        $nbPneuNeige = $this->get_nombre_pneu_neige();
        if($poidsTotal > 1500 && $nbPneuNeige <= 2){
            echo "<br>";
            echo "Attention, veuillez mettre 4 pneus neige.";
        }
    }

    public function repeindre($couleur){
        $this->set_couleur($couleur);
        echo "Le véhicule a été repeint en $couleur";
    }

    public function ajouter_pneu_neige($nombre){
        $this->nombre_pneu_neige += $nombre;
        echo "Les pneus neige ont été mis, il y a $nombre pneus neige";
    }

    public function enlever_pneu_neige($nombre){
        $this->nombre_pneu_neige -= $nombre;
        echo "Les pneus neige ont été enlevés, il y a $nombre pneus neige";
    }
    
}