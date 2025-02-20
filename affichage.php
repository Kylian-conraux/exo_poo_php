<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
</head>
<body>
        <h1>Affichage d'un véhicule Noire : </h1>
        <?php
        include_once 'allInclude.php';
        $voiture_noir = new Vehicule('noir', 1500);
        echo "La voiture est de couleur " . $voiture_noir->get_couleur() . " et pèse " . $voiture_noir->get_poids() . " kg";
        echo "<br>";
        $voiture_noir->rouler();
        echo "<br>";
        $voiture_noir->ajouterPersonne(70);
        echo "<br>";
        echo "Le poids total est de " . $voiture_noir->get_poids() . " kg";
        echo "<br>"; 
        ?>

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
        $voiture_noir->repeindre('rouge');
        echo "<br>";
        $voiture_vert->ajouter_pneu_neige(2);
        echo "<br>";
        echo "Il y a " . $voiture_vert->get_nombre_pneu_neige() . " pneus neige et elle est de couleur " . $voiture_vert->get_couleur();
        echo "<br>";
        ?>
</body>
</html>