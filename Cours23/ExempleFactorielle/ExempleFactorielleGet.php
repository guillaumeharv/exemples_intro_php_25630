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
    if(isset($_GET["fact"]))
    {
        //valider le paramètre - est-il numérique? est-il positif?
        if(is_numeric($_GET["fact"]) && $_GET["fact"] > 0)
        {
            $resultat = factorielle($_GET["fact"]);
            echo "La factorielle de " . $_GET["fact"] . " donne $resultat<bn>";
        }
        else
        {   
            echo "Impossible de calculer la factorielle - entrez un nombre positif.";
        }
    }
    else 
    {
        echo "Il faut envoyer le paramètre factorielle pour que la page effectue son calcul.<br>";
    }
    ?>
    <br><a href="ListeLiensFactorielle.php">Retourner à la liste de liens</a>
    <br><a href="FormulaireFactorielle.php">Retourner au formulaire de calcul</a>
</body>
</html>