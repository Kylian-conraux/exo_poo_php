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
        $this->set_poids($this->get_poids() + $poids);
        echo "Une personne a été ajoutée dans la voiture, le poids total est de ".$this->get_poids();
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