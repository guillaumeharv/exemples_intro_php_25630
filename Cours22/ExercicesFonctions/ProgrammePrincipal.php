<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //C'est dans ce fichier que vous testez les fonctions développées dans Fonctions.php

        //premièrement, inclure le fichier contenant les fonctions
        require_once("Fonctions.php");
    ?>
    <h1>Test de la fonction factorielle</h1>
    <?php 
        $leNombre = 5;
        echo "La factorielle de $leNombre est " . factorielle($leNombre) . "<br>";
    ?>
    <h1>Test de la fonction construitTableHTML</h1>
    <?php 
        $tabFruits = ["banane", "mangue", "bleuet"];
        $leTableauHTML = construitTableHTML($tabFruits);
        echo $leTableauHTML;

        $tabIndividu = ["prenom" => "Guillaume", "nom" => "Harvey", "age" => 45];
        $leTableauHTML = construitTableHTML($tabIndividu );
        echo $leTableauHTML;
    ?>
</body>
</html>