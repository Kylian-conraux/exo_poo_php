<?php 
class Vehicule {
    private $couleur;
    private $poids;


    public function __construct($couleur, $poids){
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function get_couleur(){
        return $this->couleur;
    }

    public function get_poids(){
        return $this->poids;
    }

    public function set_couleur($couleur){
        $this->couleur = $couleur;
    }

    public function set_poids($poids){
        $this->poids = $poids;
    }
    

    public function rouler(){
        echo "Le véhicule roule";
    }

    public function ajouterPersonne($poids){
        $this->poids += $poids;
        echo "Une personne a été ajoutée, le poids total est de $this->poids kg";
    }
}