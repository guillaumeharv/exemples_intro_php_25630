<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $laVariable = "11";
        $typeVariable = gettype($laVariable);
        echo "La variable contient " . $laVariable . " et est de type " . $typeVariable . "<br>";

        $laVariable = $laVariable + 2;
        $typeVariable = gettype($laVariable);
        echo "La variable contient " . $laVariable . " et est de type " . $typeVariable . "<br>";

        $laVariable = $laVariable / 2;
        $typeVariable = gettype($laVariable);
        echo "La variable contient " . $laVariable . " et est de type " . $typeVariable . "<br>";

        $laVariable = $laVariable . " tomates";
        $typeVariable = gettype($laVariable);
        echo "La variable contient " . $laVariable . " et est de type " . $typeVariable . "<br>";


        //ceci donnera un warning parce que "6.5 tomates" ne peut pas être converti de façon triviale en nombre et l'opérateur / nécessite que les deux opérandes soient des nombres
        $laVariable = $laVariable / 2;
        $typeVariable = gettype($laVariable);
        echo "La variable contient " . $laVariable . " et est de type " . $typeVariable . "<br>";
    ?>
</body>
</html>