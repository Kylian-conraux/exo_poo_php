<?php

class Camion extends Quatre_roues implements Action
{

    private $longueur;

    public function __construct($couleur, $poids, $nb_portes, $longueur)
    {
        parent::__construct($couleur, $poids, $nb_portes);
        $this->longueur = $longueur;
    }

    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'longueur' => $this->longueur
        ]);
    }

    public function get_longueur()
    {
        return $this->longueur;
    }

    public function set_longueur($longueur)
    {
        $this->longueur = $longueur;
    }

    public function rouler()
    {
        echo "Le camion roule";
    }

    public function ajouterPersonne($poids)
    {
        $this->set_poids($this->get_poids() + $poids);
        echo "Une personne a été ajoutée, le poids total est de" . $this->get_poids() . " kg";
    }

    public function repeindre($couleur)
    {
        $this->set_couleur($couleur);
        echo "Le véhicule a été repeint en $couleur";
    }

    public function ajouter_remorque($longueur_remorque)
    {
        $this->longueur += $longueur_remorque;
        echo "La remorque a été ajoutée, la longueur totale est de $this->longueur mètres";
    }

    public function mettre_essence(int $nombre_litre): void
    {
        echo "Le camion a été rempli d'essence, il y a $nombre_litre litres d'essence" . Vehicule::SAUT_DE_LIGNE;
        $this->set_poids($this->get_poids() + $nombre_litre);
        echo "Le poids total est de " . $this->get_poids() . " kg";
    }
}
