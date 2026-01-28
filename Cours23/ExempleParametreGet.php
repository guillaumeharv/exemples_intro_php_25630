<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //on vérifie l'existence d'un paramètre nommé message
    if(isset($_GET["message"]))
        echo "Le paramètre nommé message contient : " . $_GET["message"] . "<br>";
    else 
        echo "Aucun paramètre nommé message.";

    if(isset($_GET["prenom"]) && isset($_GET["nom"]))
    {
        echo "Votre prénom est " . $_GET["prenom"] . " et votre nom est " . $_GET["nom"];
    }
    ?>
    <h1>Liste de tous les paramètres reçus</h1>
    <ul>
    <?php
        //$_GET est rempli automatiquement à partir de la query string et contient donc tous les paramètres
        foreach($_GET as $nom => $valeur)
        {
            echo "<li>$nom : $valeur</li>";
        }
    ?>
    </ul>
</body>
</html>