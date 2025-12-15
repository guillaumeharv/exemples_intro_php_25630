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
        //5. ré-initialiser le nombre de fois qu'on a 6 à zéro, à chaque fois qu'on lance les 3 dés
        $nbFoisSix = 0;

        //premier lancer
        $lancer1 = rand(1,6);
        //var_dump($lancer1);
        if($lancer1 == 6) //2. il fallait mettre le double égal pour la comparaison et non le simple égal
            $nbFoisSix++;
        
        //deuxieme lancer
        $lancer2 = rand(1,6);
        if($lancer2 == 6) //3. il fallait mettre le double égal pour la comparaison et non le simple égal
            $nbFoisSix++;

        //troisieme lancer
        $lancer3 = rand(1,6);
        if($lancer3 == 6) //4. il fallait mettre le double égal pour la comparaison et non le simple égal
            $nbFoisSix++;

        echo "Voici les lancers : $lancer1, $lancer2, $lancer3<br>"; //1. erreur de syntaxe, le point-virgule

        //si les trois lancers sont 6
        if($nbFoisSix == 3)
            $troisFoisSix = true;
    }

    echo "Vous avez eu 3 fois six en même temps, en $nbEssais essais! Bravo!";

?>
</body>
</html>