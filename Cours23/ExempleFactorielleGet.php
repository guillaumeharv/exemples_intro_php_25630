<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //faites l'inclusion du fichier de fonctions Fonctions.php
    require_once("Fonctions.php");
    //si le paramètre factorielle existe, calculez la factorielle de ce paramètre à l'aide de la fonction factorielle et affichez le résultat sur la page
    if(isset($_GET["factorielle"]))
    {
        $resultat = factorielle($_GET["factorielle"]);
        echo "La factorielle de " . $_GET["factorielle"] . " donne $resultat<bn>";
    }
    else 
    {
        echo "Il faut envoyer le paramètre factorielle pour que la page effectue son calcul.<br>";
    }
    ?>
</body>
</html>