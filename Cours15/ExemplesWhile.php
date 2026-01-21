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
    $compteur = 1;

    while($compteur <= 10) //pas de point-virgule ici, sinon boucle infinie!
    {
        //echo "<li>$compteur</li>\n";
    ?>
        <li><?= $compteur ?></li>
    <?php
        $compteur++; //instruction très importante : elle nous rapproche de la condition de sortie
    }

    //$compteur = 1;
    //while($compteur <= 10) ; //pas de point-virgule ici, sinon boucle infinie!
    
    ?>
    </ul>
</body>
</html>