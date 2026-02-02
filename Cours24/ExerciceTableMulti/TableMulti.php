<?php 
    //si on veut faire une redirection, il faudra la faire ici
    if(!isset($_GET["nombre"]))
    {
        //redirige vers la bonne page // IMPORTANT DE METTRE CECI AVANT DE GÉNÉRER DU HTML
        header("Location: ListeLiensTableMulti.php");
        //arrêter ici l'exécution du script PHP puisque le résultat ne sera jamais affiché dans le browser de toute façon (redirection)
        die();
    }

    //inclusion du fichier de fonctions pour pouvoir appeler construitTableMultiplication
    require_once("Fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(is_numeric($_GET["nombre"]))
    {
        //afficher la table de multiplication du nombre envoyé en paramètres
        $tableM = construitTableMultiplication($_GET["nombre"]);
        echo "<h1>Table de multiplication du nombre " . $_GET["nombre"] . "</h1>";
        echo $tableM;
    }
    else 
    {
        echo "Le paramètre nombre doit être numérique.";
    }
    ?>
    <a href="ListeLiensTableMulti.php">Retourner à la liste de liens</a><br>
    <a href="FormulaireTableMulti.html">Retourner au formulaire</a>
</body>
</html>