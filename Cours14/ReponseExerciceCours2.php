<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
    a) Déclarer les variables nombre1 = 20 et nombre2 = 2 
    b) Faites afficher le résultat suivant en utilisant évidemment les variables... (et en respectant le formatage) 

                20 + 2 = 22 
                20 - 2 = 18 
                20 * 2 = 40 
                20 / 2 = 10 
                20 % 2 = 0 
 
                20 += 5 = 25 
                25 *= 4 = 100 
                100 /= 5 = 20 
    */

    $nombre1 = 20;
    $nombre2 = 2;
    
    echo "$nombre1 + $nombre2 = " . $nombre1 + $nombre2; 
    echo "<br>";

    echo "$nombre1 - $nombre2 = " . $nombre1 - $nombre2; 
    echo "<br>";

    echo "$nombre1 * $nombre2 = " . $nombre1 * $nombre2; 
    echo "<br>";

    echo "$nombre1 / $nombre2 = " . $nombre1 + $nombre2; 
    echo "<br>";

    echo "$nombre1 % $nombre2 = " . $nombre1 % $nombre2; 
    echo "<br>";
    echo "<br>";


    echo "$nombre1 += 5 = " . $nombre1 += 5;
    //ou encore
    //echo "$nombre1 += 5 = ";
    //$nombre1 += 5;
    //echo $nombre1; 
    echo "<br>";

    echo "$nombre1 *= 4 = " . $nombre1 *= 4;
    echo "<br>";

    echo "$nombre1 /= 5 = " . $nombre1 /= 5;
    echo "<br>";

    ?>
</body>
</html>