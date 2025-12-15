<?php 
      $action = "produit";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Message de bienvenue</h1>
    <?php
    //pour mettre le bon fuseau horaire
    date_default_timezone_set("America/New_York");
    //echo date("d F");
    //obtenir l'heure
    $heure = date('G');

    if($heure >= 5 && $heure < 12)
        echo "Bonjour!";
    else if($heure >= 12 && $heure < 21)
        echo "Bon après-midi!";
    else 
        echo "Bonne nuit.";


    if(date('G') >= 5 &&  date('G') < 12)
        echo "Bonjour!";
    else if( date('G') >= 12 &&  date('G') < 21)
        echo "Bon après-midi!";
    else 
        echo "Bonne nuit.";
    ?>  
    <h1>Année bissextile?</h1>
    <?php 
    /*
    Si an % 100 != 0 && an % 4 = 0 
        Ecrire("Bissextile!")  
    Sinon Si an % 100 = 0 && (an / 100) % 4 = 0 
        Ecrire("Bissextile!")  
    Sinon 
        Ecrire("N'est pas bissextile!")  
    Fin Si  
    */

    $an = date("Y");

    if($an % 100 != 0 && $an % 4 == 0)
        echo "L'année $an est bissextile.";
    else if($an % 100 == 0 && ($an / 100) % 4 == 0)
        echo "L'année $an est bissextile.";
    else 
        echo "L'année $an n'est pas bissextile.";

    echo "<br>";
    //avec le paramètre L dans la fonction date, on obtient 1 si bissextile et 0 sinon
    if(date("L") == 1)
        echo "L'année $an est bissextile.";
    else 
        echo "L'année $an n'est pas bissextile.";

    ?>
</body>
</html>