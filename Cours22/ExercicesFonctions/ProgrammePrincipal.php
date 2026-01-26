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
     <h1>Test de la fonction estPalindrome</h1>
    <?php 
        $chaine = "Esope reste la et se repose";

        /*$test = estPalindrome($chaine);

        if($test == true)
        {
            echo "La chaine $chaine est un palindrome.";
        }
        else 
        {
            echo "La chaine $chaine n'est pas un palindrome.";
        }
            */

        //if(estPalindrome($chaine) == true)
        if(estPalindrome($chaine))
        {
            echo "La chaine $chaine est un palindrome.";
        }
        else 
        {
            echo "La chaine $chaine n'est pas un palindrome.";
        }
    ?>
    <h1>Test de la fonction sommeIntervalle</h1>
    <?php 
        $nb1 = 6;
        $nb2 = 3;
        echo "La somme des nombres compris entre $nb1 et $nb2 est " . sommeIntervalle($nb1, $nb2) . "<br>";
    ?>
    <h1>Test de la fonction moyenneTableau</h1>
    <?php 
        $monTableau = [15, 10, 5];
        echo "La moyenne des éléments compris dans mon tableau est " . moyenneTableau($monTableau). "<br>";

        $monTabAssociatif = ["element1" => 15, "element2" => 25, "element3" => 35];
        echo "La moyenne des éléments compris dans mon tableau associatif est " . moyenneTableau($monTabAssociatif). "<br>";

        print_r($monTableau);
    ?>
    <h1>Test de la procédure tableMultiplication</h1>
    <?php
        //comme c'est une procédure, elle ne retourne rien, on l'appelle et elle s'occupe de l'affichage
        tableMultiplication(6); 
    ?>
    <h1>Test de la fonction construitTableMultiplication</h1>
    <?php
        $listeHTML = construitTableMultiplication(6); 
        echo $listeHTML;

        //echo construitTableMultiplication(6); 
    ?>
    <h1>Test de la fonction prixAffiches</h1>
    <?php

        $nombreAffiches = 4;
        echo "Le prix pour $nombreAffiches affiches est : " . prixAffiches($nombreAffiches) . "<br>";

        $nombreAffiches = 10;
        echo "Le prix pour $nombreAffiches affiches est : " . prixAffiches($nombreAffiches) . "<br>";

        $nombreAffiches = 40;
        echo "Le prix pour $nombreAffiches affiches est : " . prixAffiches($nombreAffiches) . "<br>";

    ?>
</body>
</html>