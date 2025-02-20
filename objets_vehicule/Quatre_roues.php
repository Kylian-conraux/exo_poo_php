<?php

class Quatre_roues extends Vehicule{

    private $nb_portes;

    public function __construct($couleur, $poids, $nb_portes){
        parent::__construct($couleur, $poids);
        $this->nb_portes = $nb_portes;
    }

    public function get_nb_portes(){
        return $this->nb_portes;
    }

    public function set_nb_portes($nb_portes){
        $this->nb_portes = $nb_portes;
    }

    public function rouler(){
        echo "Le quatre roues roule";
    }

    public function ajouterPersonne($poids){
        $this->set_poids($this->get_poids() + $poids);
        echo "Une personne a été ajoutée, le poids total est de ".$this->get_poids();
    }

   public function repeindre($couleur){
        $this->set_couleur($couleur);
        echo "Le véhicule a été repeint en $couleur";
    }

}