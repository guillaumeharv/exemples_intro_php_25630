<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lancer de trois dés jusqu'à temps que j'obtienne trois 6 EN MÊME TEMPS</h1>
<?php
    $troisFoisSix = false;
    $nbEssais = 0;

    while($troisFoisSix != true)
    {
        $nbEssais++;

        //premier lancer
        $lancer1 = rand(1,6);
        if($lancer1 == 6)
            $nbFoisSix++;
        
        //deuxieme lancer
        $lancer2 = rand(1,6);
        if($lancer2 == 6)
            $nbFoisSix++;

        //troisieme lancer
        $lancer3 = rand(1,6);
        if($lancer3 == 6)
            $nbFoisSix++;

        echo "Voici les lancers : $lancer1, $lancer2, $lancer3<br>"

        //si les trois lancers sont 6
        if($nbFoisSix == 3)
            $troisFoisSix = true;
    }

    echo "Vous avez eu 3 fois six en même temps, en $nbEssais essais! Bravo!";

?>
</body>
</html>