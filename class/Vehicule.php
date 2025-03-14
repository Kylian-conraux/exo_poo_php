<?php
abstract class Vehicule
{
    private $couleur;
    private $poids;
    const SAUT_DE_LIGNE = "<br>";
    protected $nb_changement_couleur = 0;

    public function __construct($couleur, $poids)
    {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function toArray()
    {
        return [
            'couleur' => $this->couleur,
            'poids' => $this->poids,
            'nb_changement_couleur' => $this->nb_changement_couleur
        ];
    }

    public function get_couleur()
    {
        return $this->couleur;
    }

    public function get_poids()
    {
        return $this->poids;
    }

    public function set_couleur($couleur)
    {
        $this->nb_changement_couleur++;
        $this->couleur = $couleur;
    }

    public function set_poids($poids)
    {
        $this->poids = $poids;
        $className = get_class($this);
        if ($this->poids > 2100 && $className != "Camion") {
            $this->poids = 2100;
        }
    }


    public function rouler()
    {
        echo "Le véhicule roule";
    }

    public abstract function ajouterPersonne($poids); //{
    //$this->poids += $poids;
    //echo "Une personne a été ajoutée, le poids total est de $this->poids kg";
    //}

    public function repeindre($couleur)
    {
        $this->set_couleur($couleur);
        echo "Le véhicule a été repeint en $couleur" . self::SAUT_DE_LIGNE;
        echo "Le nombre de changement de couleur est de $this->nb_changement_couleur" . self::SAUT_DE_LIGNE;
    }

    public function ajouter_essence($nombre_litre)
    {
        $this->poids += $nombre_litre;
        echo "Le véhicule a été rempli d'essence, il y a $nombre_litre litres d'essence en plus, le poids total est de $this->poids kg";
    }

    /**
     * affcihers tous les attributs de l'objet peu importe le type de véhicule
     */
    public static function afficher_attribut($vehicule)
    {
        echo "Attributs du véhicule " . get_class($vehicule) . " : " . self::SAUT_DE_LIGNE;
        $attributs = $vehicule->toArray();
        foreach ($attributs as $key => $value) {
            echo "$key : $value ." . self::SAUT_DE_LIGNE;
        }
    }
}
