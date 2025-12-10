<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //avec define
    /*
    define("PI", 3.1416);
    $rayon = 10;
    $circonference = 2 * PI * $rayon;
    echo "La circonférence d'un cercle de rayon $rayon est de $circonference.";
    */
    //avec const (conseillé dans le code récent)
    
    //à partir de PHP 5.3 et plus, utiliser const est préférable
    const PI = 3.1416;
    $rayon = 10;
    $circonference = 2 * PI * $rayon;
    echo "La circonférence d'un cercle de rayon $rayon est de $circonference.";
    
    ?>
</body>
</html>