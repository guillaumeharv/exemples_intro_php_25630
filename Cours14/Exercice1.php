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
    Traduire cet algorithme en code PHP. 

    Si nbOranges <= 10  
        prixTotal <- prixUnit * nbOranges 
    Sinon Si nbOranges <= 15  
        prixTotal <- 10 * prixUnit + (nbOranges - 10) * prixUnit * 0.9 
    Sinon   
        prixTotal <- 10 * prixUnit + 5 * prixUnit * 0.9 + (nbOranges - 15) * prixUnit * 0.85 
    Fin Si  

    prixParOrange <- prixTotal / nbOranges  

    Testez-le avec un prixUnit de 1 dollars et des valeurs différentes de nbOranges pour couvrir les différents cas. 
    */
    $prixUnit = 1;
    $nbOranges = 18;

    if($nbOranges <= 10)
    {
        echo "première branche<br>";
        $prixTotal = $prixUnit * $nbOranges;
    }
    else if($nbOranges <= 15)
    {
        echo "deuxième branche<br>";
        $prixTotal = 10 * $prixUnit + ($nbOranges - 10) * $prixUnit * 0.9;
    }
    else 
    {
        echo "troisième branche<br>";
        $prixTotal = 10 * $prixUnit + 5 * $prixUnit * 0.9 + ($nbOranges - 15) * $prixUnit * 0.85;
    }

    $prixParOrange = $prixTotal / $nbOranges;

    echo "Le prix total est $prixTotal et le prix par orange est $prixParOrange.<br>";
    ?>
</body>
</html>