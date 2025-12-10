<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $Prenom = "Guillaume";
    //ceci génèrera un warning lors de l'exécution parce que la variable prenom n'a pas été définie (P majuscule)
    echo "Mon prénom est " . $prenom;

    //inclusion de fichier inexistant (génère un warning lors de l'exécution mais l'exécution continue)
    include("FichierInexistant.php");
    
    //erreur fatale d'exécution
    $diviseur = 10 - 10;
    $fraction = 5 / $diviseur;
    
    //erreur de syntaxe (généré lors de l'interprétation avant même l'exécution)
    $addition = 10 + 10

    echo "Le programme s'exécute toujours.";
    ?>
</body>
</html>