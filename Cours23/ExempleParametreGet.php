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
</body>
</html>