<?php 

class Deux_roues extends Vehicule {
    private $cylindree;

    public function __construct($couleur, $poids, $cylindree){
        parent::__construct($couleur, $poids);
        $this->cylindree = $cylindree;
    }

    public function get_cylindree(){
        return $this->cylindree;
    }

    public function set_cylindree($cylindree){
        $this->cylindree = $cylindree;
    }

    public function rouler(){
        echo "Le deux roues roule";
    }

    public function ajouterPersonne($poids_personne){
        $this->set_poids($this->get_poids() + $poids_personne);
        echo "Une personne a été ajoutée, le poids total est de ".$this->get_poids();
    }

    public function mettre_essence($nombre_litre){

        echo "Le deux roues a été rempli d'essence, il y a $nombre_litre litres d'essence";
    }


}