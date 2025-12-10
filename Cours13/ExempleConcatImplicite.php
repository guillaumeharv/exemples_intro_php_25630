<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $prenom = "Guillaume";
    $langage = "PHP";

    //avec la concaténation implicite, on peut placer des variables dans les chaines définies avec des guillemets doubles
    $chaine = "Bonjour, je m'appelle $prenom et j'enseigne le $langage.";
    echo $chaine;

    echo "<br>";

    //ici la concaténation implicite ne peut pas être utilisée à cause de l'utilisation de la fonction count
    $leTableau = array("test", "test2", "allo");
    echo "Le tableau contient " . count($leTableau) . " éléments.";
    ?>
</body>
</html>