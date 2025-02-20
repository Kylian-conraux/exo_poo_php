<?php

class Deux_roues extends Vehicule
{
    private $cylindree;

    public function __construct($couleur, $poids, $cylindree)
    {
        parent::__construct($couleur, $poids);
        $this->cylindree = $cylindree;
    }

    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'cylindree' => $this->cylindree
        ]);
    }

    public function get_cylindree()
    {
        return $this->cylindree;
    }

    public function set_cylindree($cylindree)
    {
        $this->cylindree = $cylindree;
    }

    public function rouler()
    {
        echo "Le deux roues roule";
    }

    public function ajouterPersonne($poids_personne)
    {
        $this->set_poids($this->get_poids() + $poids_personne + 2); //2 kg pour le casque
        echo "Une personne de " . $poids_personne . " kg a été ajoutée avec (+2kg) pour le casque, le poids total est de " . $this->get_poids() . " kg";
    }

    public function mettre_essence($nombre_litre)
    {

        echo "Le deux roues a été rempli d'essence, il y a $nombre_litre litres d'essence" . Vehicule::SAUT_DE_LIGNE;
        //mettre à jour le poids
        $this->set_poids($this->get_poids() + $nombre_litre);
        echo "Le poids total est de " . $this->get_poids() . " kg";
    }

    public function changerCylindree($cylindree)
    {
        $this->cylindree = $cylindree;
        echo "La cylindrée a été changée, la nouvelle cylindrée est de $cylindree cm3";
    }
}
