<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La somme des entiers jusqu'à 20</h1>
    <?php 
        $somme = 0;

        for($i = 1; $i <= 20; $i++)
        {
            //$somme = $somme + $i;
            $somme += $i;
        }

        echo "La somme des entiers de 1 à 20 est $somme.<br>";
    ?>
    <h1>La table de multiplication du nombre 6</h1>
    <?php 
    /*
    1 x 6 = 6  
    2 x 6 = 12  
    3 x 6 = 18  
    … 
    12 x 6 = 72  
    */
    for($i = 1; $i <= 12; $i++)
    {
        $resultat = $i * 6;
        echo "$i x 6 = $resultat<br>";
    } 
    ?>
    <h1>Les tables de multiplication</h1>
    <?php 
    for($i = 1; $i <= 12; $i++)
    {
        ?>
        <h2>La table de multiplication du nombre <?=  $i ?></h2>
        <?php 
    
        for($j = 1; $j <= 12; $j++)
        {
            $resultat = $j * $i;
            echo "$j x $i = $resultat<br>";
        } 
        ?>
    <?php 
    }
  ?>
</body>
</html>