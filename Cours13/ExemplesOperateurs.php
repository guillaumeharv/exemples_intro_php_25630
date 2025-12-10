<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //assignation
    $nombre = 33;
    echo $nombre;
    echo "<br>";

    //addition
    $nombre = $nombre + 10;
    echo $nombre;
    echo "<br>";

    //soustraction
    $nombre = $nombre - 20;
    echo $nombre;
    echo "<br>";

    //multiplication
    $nombre = $nombre * 2;
    echo $nombre;
    echo "<br>";

    //division
    $nombre = $nombre / 2;
    echo $nombre;
    echo "<br>";

    //modulo
    $nombre = $nombre % 12;
    echo $nombre;
    echo "<br>";

    //utilisation des parenthèses pour la priorité
    $calcul = 5 * 3 + 4;
    echo "5 * 3 + 4 = " . $calcul;
    echo "<br>";

    $calcul = 5 * (3 + 4);
    echo "5 * (3 + 4) = " . $calcul;
    echo "<br>";

    //incrémentation avec ++
    $i = 1;
    echo "i vaut $i";
    echo "<br>";
    //équivalent de $i = $i + 1
    $i++;
    echo "après l'utilisation de ++, i vaut $i";
    echo "<br>";
    
    //équivalent de $i = $i - 1
    $i--;
    echo "après l'utilisation de --, i vaut $i";
    echo "<br>";

    //attention à l'utilisation de $i++ dans une instruction plus longue...
    //le ++ peut se mettre avant OU après la variable sur laquelle vous l'utilisez et le résultat n'est pas pareil dépendamment de la position où vous mettez l'opérateur
    echo "<br>";
    echo "<br>";

    $i = 1;
    echo "i vaut $i";
    echo "<br>";
    //ici l'affichage va se faire en premier, et l'incrémentation en deuxième.
    echo $i++;
    echo "<br>";
    echo "i vaut $i";
    echo "<br>";
    echo "<br>";

    $i = 1;
    echo "i vaut $i";
    echo "<br>";
    //ici l'affichage va se faire en deuxième, et l'incrémentation en premier.
    echo ++$i;
    echo "<br>";
    echo "i vaut $i";
    echo "<br>";
    echo "<br>";

    //il y a aussi i-- et --i... à voir de votre côté 

    //les opérateurs d'assignation après opération (+=, -=, *=, /=, .=)
    $x = 10;
    echo "Avant le += 5, x vaut $x";
    echo "<br>";
    //exactement la même chose que x = x + 5
    $x += 5;
    echo "Après le += 5, x vaut $x";
    //exactement la même chose que x = x * 5
    echo "<br>";
    $x *= 10;
    echo "Après le *= 10, x vaut $x";
    echo "<br>";
    $x /= 15;
    echo "Après le /= 15, x vaut $x";
    echo "<br>";
    $x %= 10;
    echo "Après le %= 10, x vaut $x";
    echo "<br>";

    $prenom = "Guillaume";
    $maChaine = "Mon prénom est : ";
    $maChaine .= $prenom;
    echo $maChaine;
?>
</body>
</html>