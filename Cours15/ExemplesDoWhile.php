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

    do
    {
    ?>
        <li><?= $compteur ?></li>
    <?php
        $compteur++; //instruction très importante : elle nous rapproche de la condition de sortie
    }
    while($compteur <= 10); //attention de ne pas oublier le point-virgule ici

    echo "Fin du programme.";
    ?>
    </ul>
</body>
</html>