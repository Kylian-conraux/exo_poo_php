<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
</head>
<body>
        <h1>Affichage d'un véhicule : </h1>
        <?php
        include 'Vehicule.php';
        $voiture_noir = new Vehicule('noir', 1500);
        echo "La voiture est de couleur " . $voiture_noir->get_couleur() . " et pèse " . $voiture_noir->get_poids() . " KG";
        echo "<br>";
        $voiture_noir->rouler();
        echo "<br>";
        $voiture_noir->ajouterPersonne(70);
        echo "<br>";
        echo "Le poids total est de " . $voiture_noir->get_poids();
        echo "<br>"; 
        ?>
</body>
</html>