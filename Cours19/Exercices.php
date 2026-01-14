<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
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
<h1>Exercice 2 : Les températures associatives</h1>
<h2>2.1 La transformation du tableau </h2>
<pre>
<?php 
//$temperaturesSemaine = [3, -2, 10, -1, 5, 3, -1]; 
//$jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$temperaturesSemaine = ["Lundi" => 3, "Mardi" => -2, "Mercredi" => 10, "Jeudi" => -1, "Vendredi" => 5, "Samedi" => 3, "Dimanche" => -1];

print_r($temperaturesSemaine);
?>
</pre>
<h2>2.2 L'affichage de la table </h2>
<table border="1">
        <tr><th>Jour</th><th>Température</th></tr>
        <?php
            foreach($temperaturesSemaine as $jour => $temp)
            {
                if($temp < 0)
                    $classTemp = "bleu";
                else 
                    $classTemp = "rouge";

                //version originale
                echo "<tr>
                    <td>$jour</td>
                    <td class=\"$classTemp\">$temp</td>
                </tr>";
            }
            
        ?>
    </table>
<h2>2.3 Les journées froides</h2>
<ul>
    <?php
        foreach($temperaturesSemaine as $jour => $temp)
        {
            if($temp < 0)
                echo "<li>$jour</li>";
        }
    ?>
</ul>
<h1>3. Les tableaux à plusieurs dimensions</h2>
<?php 
    /*
    Le tableau lesLivres est structuré comme suit : 
        La clé est le numéro ASIN du livre. 
        La valeur est un tableau à index associatif représentant un livre. 

    Chaque tableau représentant un livre est aussi associatif, et contient :  
        Le titre 
        L'auteur. 
    */
    $lesLivres = array( 

            "0307387895" => array("titre" => "The Road", "auteur" => "Cormac McCarthy"), 

            "0307743683" => array("titre" => "The Stand", "auteur" => "Stephen King"), 

            "1408855658" => array("titre" => "Harry Potter and the Philosopher's Stone", "auteur" => "J.K. Rowlings"), 

            "0375706674" => array("titre" => "No Country for Old Men", "auteur" => "Cormac McCarthy") 

        );   

    //3.1 L'ajout du nouveau livre
    //Ajouter un autre livre dans le tableau lesLivres en lui donnant le bon code ASIN et les bons attributs titre et auteur. 
    $lesLivres["2898220876"] = array("titre" => "Que notre joie demeure", "auteur" => "Kev Lambert");
?>
<pre>
    <?php 
        print_r($lesLivres);
    ?>
</pre>
<h2>La table des livres</h2>
<table>
    <tr><th>Titre</th><th>Auteur</th><th>Lien vers Amazon</th></tr>
<?php 
    foreach($lesLivres as $ASIN => $livre)
    {
        /*
        echo "<tr>";
        echo "<td>" . $livre['titre'] . "</td>";
        echo "<td>" . $livre["auteur"] . "</td>";
        echo "<td><a href='http://www.amazon.ca/dp/$ASIN' target='_blank'>Acheter sur Amazon</a></td>";
        echo "</tr>";
        */
        //si vous voulez utiliser la concaténation implicite avec les tableaux associatifs, il faut utiliser les { } autour de l'expression que vous voulez mettre dans la chaine
        echo "<tr>";
        echo "<td>{$livre["titre"]}</td>";
        echo "<td>{$livre["auteur"]}</td>";
        echo "<td><a href='http://www.amazon.ca/dp/$ASIN' target='_blank'>Acheter sur Amazon</a></td>";
        echo "</tr>";
    }
?>
</table>
<h2>Version avec moins de HTML dans le PHP</h2>
<table>
    <tr><th>Titre</th><th>Auteur</th><th>Lien vers Amazon</th></tr>
<?php 
    foreach($lesLivres as $ASIN => $livre)
    {
        //si vous voulez utiliser la concaténation implicite avec les tableaux associatifs, il faut utiliser les { } autour de l'expression que vous voulez mettre dans la chaine
        ?>
        <tr>
            <td><?= $livre["titre"] ?></td>
            <td><?= $livre["auteur"] ?></td>
            <td><a href='http://www.amazon.ca/dp/<?= $ASIN ?>' target='_blank'>Acheter sur Amazon</a></td>
        </tr>
        <?php
    }
?>
</table>
</body>
</html>