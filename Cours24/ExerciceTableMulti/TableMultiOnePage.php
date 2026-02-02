<?php 
    $nombre = "";
    $msgErreur = "";
    $tableM = "";

    //si j'arrive du formulaire, $_GET ne sera pas vide
    if(isset($_GET["nombre"]))
    {
        //initialisation de la variable nombre pour l'imprimer dans le formulaire plus bas
        $nombre = $_GET["nombre"];
    
        //si le paramètre nombre est numérique
        if(is_numeric($_GET["nombre"]))
        {
            //inclusion du fichier de fonctions pour pouvoir appeler construitTableMultiplication
            require_once("Fonctions.php");
            //afficher la table de multiplication du nombre envoyé en paramètres
            $tableM = construitTableMultiplication($_GET["nombre"]);
        }
        else 
        {
            $msgErreur = "Votre entrée doit être numérique.";
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Entrez le nombre dont vous voulez afficher la table de multiplication : 
        <!-- impression du paramètre nombre dans son input -->
        <input type="number" name="nombre" value="<?= $nombre ?>"/>
        <input type="submit" value="Afficher"/>
    </form>
    <?php 
        //si on a calculé une table de multiplication, on l'affiche
        if($tableM != "")
            echo $tableM;
        else if($msgErreur != "") //s'il y a un message d'erreur, on l'affiche
            echo "<p>$msgErreur</p>";
    ?>
</body>
</html>