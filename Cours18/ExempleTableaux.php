<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php 
    $fruits = array("pomme", "pamplemousse", "bleuet");
    //$fruits = ["pomme", "pamplemousse", "bleuet"];
    var_dump($fruits);
    print_r(value: $fruits);
    ?>
</pre>
<?php 
    //echo "Le premier fruit dans le tableau est : " . $fruits[0];

    //pour le premier élément, c'est l'index 0
    echo "Le premier fruit dans le tableau est : $fruits[0].<br>";

    //pour le troisième fruit, ce sera (3 - 1), donc l'élément 2
    echo "Le dernier fruit dans le tableau est : $fruits[2].<br>";

    //pour écrire à la position 0 dans le tableau
    $fruits[0] = "poire";
    echo "Après modification, le premier fruit dans le tableau est : $fruits[0].<br>";

    //attention, en PHP, vous pouvez ajouter un élément à n'importe quel endroit dans le tableau, ce qui peut créer des tableaux à index numériques qui ne sont pas contigues
    //$fruits[6] = "test";
    //var_dump($fruits);

    //pour ajouter un élément dans le tableau, dans le cas d'un tableau à index numérique, et préserver la continuité du tableau, on utilise les brackets vides, ce qui va ajouter l'élément à la fin du tableau
    $fruits[] = "framboise";
    $fruits[] = "ananas";
    $fruits[] = "mangue";

?>
<pre><?php print_r(value: $fruits); ?></pre>
<?php 
    $nbElements = count($fruits);
    echo "Il y a $nbElements fruits dans le tableau.";
?>
<ul>
<?php
    for($i = 0; $i < $nbElements; $i++)
    {
    ?>
        <li>Fruit #<?= $i + 1 ?> : <?= $fruits[$i] ?></li>
    <?php
    }
?>
</ul>
<ul>
<?php
    foreach($fruits as $f)
    {
    ?>
        <li><?= $f ?></li>
    <?php
    }
?>
</ul>
</body>
</html>