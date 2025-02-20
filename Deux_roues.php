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

    public function ajouterPersonne(){
        echo "Une personne a été ajoutée";
    }

    public function mettre_essence(){
        echo "Le deux roues a été rempli d'essence";
    }


}