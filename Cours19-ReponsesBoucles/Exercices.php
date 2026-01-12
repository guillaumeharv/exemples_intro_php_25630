<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1 : Le tableau des carrés et des cubes</h1>
    <table border="1">
        <tr><th>Nombre</th><th>Carré</th><th>Cube</th></tr>
        <?php 
        for($i = 1; $i <= 10; $i++)
        {
            $carre = $i ** 2;
            $cube = $i ** 3;
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $carre ?></td>
                <td><?= $cube ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <h1>Exercice 2 : La somme de l'intervalle</h1>
    <?php 
    //Calculer la somme des nombres compris entre deux nombres contenus dans les variables $nombre1 et $nombre2.  
    $nombre1 = 6;
    $nombre2 = 3;
    $somme = 0;

    if($nombre1 > $nombre2)
    {
        $temp = $nombre1;
        $nombre1 = $nombre2;
        $nombre2 = $temp;
    }

    //boucler du plus petit au plus grand nombre
    for($i = $nombre1; $i <= $nombre2; $i++)
    {
        $somme += $i;
    }

    echo "La somme des nombres entre $nombre1 et $nombre2 est de $somme.";
    ?>
    <h2>Version qui affiche les nombres au fur et à mesure (Frédérik)</h2>
    <?php
        $nombre1 = 1;
        $nombre2 = 5;
        $calcul = 0;
    
        if ($nombre1 < $nombre2) {
            $min = $nombre1;
            $max = $nombre2;
        } else {
            $min = $nombre2;
            $max = $nombre1;
        }
 
        echo "La somme des nombres compris entre $min et $max est ";
    
        $calcul = $min;
        echo '<span class="plus-red">  ' . $min . "</span>";
        
        for ($i = $min + 1; $i <= $max; $i++) {
            echo '<span class="plus-red"> + ' . $i . '</span>';
            $calcul += $i;
        }
 
        echo " et le résultat est égal à " . $calcul;
    ?>
    <h1>Exercice 3 : L'épargne de Joe</h1>
    <?php 
    $nbMois = 6; 
    $moisCourant = 1;
    $montantAccumule = 0;
    const SALAIRE_MENSUEL = 3000;
    const LOYER = 1500;
    const ELECTRICITE = 1000;
    const BONUS = 1000;

    while($moisCourant <= $nbMois)
    {
        //à chaque mois, Joe fait son salaire mensuel
        $montantAccumule += SALAIRE_MENSUEL;

        //à chaque deux mois, Joe paie son loyer
        if($moisCourant % 2 == 0)
        {
            $montantAccumule -= LOYER;
        }

        //à chaque trois mois, Joe paie son électricité
        if($moisCourant % 3 == 0)
        {
            $montantAccumule -= ELECTRICITE;
        }

        //à chaque six mois, Joe reçoit un bonus
        if($moisCourant % 6 == 0)
        {
            $montantAccumule += BONUS;
        }

        $moisCourant++;
    }

    echo "Après $nbMois mois, Joe a accumulé un montant de $montantAccumule.";

?>
<h1>Exercice 4 : Les boucles imbriquées </h1>
<table border="1">
<?php 
    for($i =1; $i <= 10; $i++)
    {
        echo "<tr>";
        for($j = 1; $j <= 10; $j++)
        {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
?>
</table>
<h2>Version avec moins de HTML dans le PHP</h2>
<table border="1">
<?php 
    for($i =1; $i <= 10; $i++)
    {
        ?>
        <tr>
        <?php
        for($j = 1; $j <= 10; $j++)
        {
            ?>
            <td><?= $i * $j ?></td>
            <?php 
        }
        ?>
        </tr>
<?php
    }
?>
</table>
</body>
</html>