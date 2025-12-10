<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php 
        //exemple de boucle for
        for($i = 1; $i <= 10; $i++)
        {
            echo "<li>$i</li>";
        }

        //équivalent de
        /*
        $i = 1;
        while($i <= 10)
        {
            echo "<li>$i</li>";
            $i++;
        }
        */
    ?>
    </ul>
    <h1>Exemples de boucles imbriquées</h1>
    <?php 
    //exemple de boucle for imbriquée
    for($i = 1; $i <= 10; $i++)
    {
        echo "<h1>Liste #$i</h1>";
        echo "<ul>";
        for($j = 1; $j <= 10; $j++)
        {
            echo "<li>$j</li>";
        }
        echo "</ul>";
    }
    ?>
    <h1>Utilisation de break</h1>
    <?php 
    $i = 1;
    //cette boucle est valide, mais la condition de sortie n'est pas à la ligne 46, mais bien à la ligne 51, ce qui peut rendre la lecture plus compliquée
    while(true)
    {
        echo $i . "<br>";
        //si i est 10, on sort de la boucle
        $i++;
        if($i > 50)
            break;
    }
    echo "Sortie de la boucle";


    //la lecture de la boucle suivante est plus facile parce que la condition n'est pas imbriquée plus loin dans la boucle, mais présente directement dans le while
    $i = 1;
    while($i <= 50)
    {
        echo $i . "<br>";
        $i++;
    }
    ?>
</body>
</html>