<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1 : Le produit</h1>
    <?php 
/*
Créer un tableau associatif permettant de représenter un produit qui possède un nom, un prix et un fabricant. 
*/

$leProduit = array("nom" => "Télévision 4K", "prix" => 2000, "fabricant" => "Sony");
/*

1.1 Utiliser les index de façon statique  

Sans utiliser de boucle, faites afficher la liste suivante :  

Nom : (le nom du produit) 
Prix : (le prix du produit) 
Fabricant : (le fabricant du produit) 

*/
?>
<h2>1.1 La version statique</h2>
<ul>
    <li>Nom : <?=  $leProduit["nom"] ?></li>
    <li>Prix : <?=  $leProduit["prix"] ?></li>
    <li>Fabricant : <?=  $leProduit["fabricant"] ?></li>
</ul>
<?php
/*
1.2 Utiliser les index de façon dynamique  
En utilisant une boucle qui passe à travers les clés et les valeurs, refaire la même liste. 
*/
?>
<h2>1.2 La version dynamique</h2>
<ul>
    <?php 
    foreach($leProduit as $c => $v)
    {
        echo "<li>$c : $v</li>";
    }
    ?>
</ul>
</body>
</html>