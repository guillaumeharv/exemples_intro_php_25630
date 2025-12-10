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
    a) Déclarer deux variables entières et leur assigner des valeurs. 
    */
    $variable1 = 33;
    $variable2 = 33;
    /*
    b) À l'aide des conditionnelles, déterminer laquelle des variables contient la plus grande valeur et afficher le résultat. On veut afficher à la fois le nom de la variable la plus grande et son contenu. 
    c) Si les deux variables sont égales, afficher un message qui le dit à l'usager. 
    */
    if($variable1 > $variable2)
    {
        echo "La variable \$variable1 est plus grande. Elle contient $variable1.<br>";
    }
    else if($variable2 > $variable1)
    {
        echo "La variable \$variable2 est plus grande. Elle contient $variable2.<br>";
    }
    else 
    {
        echo "Les deux variables \$variable1 et \$variable2 contiennent la même valeur, soit $variable1.<br>";
    }    

?>
</body>
</html>