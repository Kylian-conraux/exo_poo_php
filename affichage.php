<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
</head>

<body>
    <h1>Affichage d'un véhicule Noire (abstract du coup c'est mort) : </h1>
    <?php
    include_once 'allInclude.php';
    /* $voiture_noir = new Vehicule('noir', 1500);
        echo "La voiture est de couleur " . $voiture_noir->get_couleur() . " et pèse " . $voiture_noir->get_poids() . " kg";
        echo "<br>";
        $voiture_noir->rouler();
        echo "<br>";
        $voiture_noir->ajouterPersonne(70);
        echo "<br>";
        echo "Le poids total est de " . $voiture_noir->get_poids() . " kg";
        echo "<br>"; 
        */ ?>

    <h1>Affichage d'une Voiture vert : </h1>
    <?php
    $voiture_vert = new Voiture('vert', 1400, 5, 0);
    echo "La voiture est de couleur " . $voiture_vert->get_couleur() . " et pèse " . $voiture_vert->get_poids() . " kg, elle a " . $voiture_vert->get_nb_portes() . " portes et " . $voiture_vert->get_nombre_pneu_neige() . " pneus neige";
    echo "<br>";
    $voiture_vert->ajouterPersonne(65);
    echo "<br>";
    $voiture_vert->ajouterPersonne(65);
    echo "<br>";
    echo "Le poids total est de " . $voiture_vert->get_poids() . " kg et sa couleur est " . $voiture_vert->get_couleur();
    echo "<br>";
    $voiture_vert->repeindre('rouge');
    echo "<br>";
    $voiture_vert->ajouter_pneu_neige(2);
    echo "<br>";
    echo "Il y a " . $voiture_vert->get_nombre_pneu_neige() . " pneus neige et elle est de couleur " . $voiture_vert->get_couleur();
    echo "<br>";
    ?>

    <h1>Affichage d'un Deux roues noir : </h1>
    <?php
    $deux_roues_noir = new Deux_roues('noir', 120, 0);
    echo "Le deux roues est de couleur " . $deux_roues_noir->get_couleur() . " et pèse " . $deux_roues_noir->get_poids() . " kg";
    echo "<br>";
    $deux_roues_noir->ajouterPersonne(80);
    echo "<br>";
    $deux_roues_noir->ajouter_essence(20);
    echo "<br>";
    echo "Le poids total est de " . $deux_roues_noir->get_poids() . " kg et sa couleur est " . $deux_roues_noir->get_couleur();
    echo "<br>";
    ?>

    <h1>Affichage d'un camion bleu : </h1>
    <?php

    $camion_bleu = new Camion('bleu', 10000, 2, 10);
    echo "Le camion est de couleur " . $camion_bleu->get_couleur() . " et pèse " . $camion_bleu->get_poids() . " kg, il a " . $camion_bleu->get_nb_portes() . " portes et une longueur de " . $camion_bleu->get_longueur() . " mètres";
    echo "<br>";
    $camion_bleu->ajouterPersonne(80);
    echo "<br>";
    $camion_bleu->ajouter_remorque(5);
    echo "<br>";
    echo "Le poids total est de " . $camion_bleu->get_poids() . " kg et sa couleur est " . $camion_bleu->get_couleur() . " et sa longueur est de " . $camion_bleu->get_longueur() . " mètres et sa couleur est " . $camion_bleu->get_couleur();
    echo "<br>";
    ?>

    <h1>Affichage d'un 2 roues rouge : </h1>
    <?php
    $deux_roues_rouge = new Deux_roues('rouge', 150, 0);
    echo "Le deux roues est de couleur " . $deux_roues_rouge->get_couleur() . " et pèse " . $deux_roues_rouge->get_poids() . " kg";
    echo "<br>";
    $deux_roues_rouge->ajouterPersonne(70);
    echo "<br>";
    $deux_roues_rouge->repeindre('vert');
    echo "<br>";
    $deux_roues_rouge->changerCylindree(1000);
    echo "<br>";
    Vehicule::afficher_attribut($deux_roues_rouge);
    echo "<br>";
    ?>

    <h1>Affichage d'un camion blanc de 6000 kg : </h1>
    <?php

    $camion_blanc = new Camion('blanc', 6000, 2, 8);
    echo "Le camion est de couleur " . $camion_blanc->get_couleur() . " et pèse " . $camion_blanc->get_poids() . " kg, il a " . $camion_blanc->get_nb_portes() . " portes et une longueur de " . $camion_blanc->get_longueur() . " mètres";
    echo "<br>";
    $camion_blanc->ajouterPersonne(84);
    echo "<br>";
    $camion_blanc->repeindre('bleu');
    $camion_blanc->set_nb_portes(2);
    echo "<br>";
    echo "Le nombre de porte est de " . $camion_blanc->get_nb_portes();
    echo "<br>";
    Vehicule::afficher_attribut($camion_blanc);
    echo "<br>";
    ?>
</body>

</html>