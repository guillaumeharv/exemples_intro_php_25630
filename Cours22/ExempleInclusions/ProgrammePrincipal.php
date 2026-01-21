<?php 
    //inclusion du fichier de fonction qui contient les fonctions utilisées dans ce programme
    require_once("Fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemple d'utilisation de l'inclusion de fichiers</h1>
    <h2>La table des températures de demain</h2>
<?php
    //les températures sont en Celsius
    $temperaturesDemain = ["matin" => 10, "après-midi" => 15, "soir"=> 12];  
?>
<table border='1'>
    <tr><th>Période</th><th>Température (C)</th><th>Température (F)</th></tr>
    <?php 
    //afficher les températures en Celsius ET en Fahrenheit
    foreach($temperaturesDemain as $periode => $tempC)
    {
        $tempF = celsiusAFahrenheit($tempC);
    ?>
    <tr><td><?= $periode ?></td><td><?= $tempC ?></td><td><?= $tempF ?></td></tr>
    <?php
    }
    ?>
    </table>
</body>
</html>