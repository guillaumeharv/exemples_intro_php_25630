<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //définition de la fonction
    function calculeDoubleValeur($nbADoubler)
    {
        //habituellement on n'utilise pas echo dans une fonction, c'est simplement pour tester dans ce cas-ci
        echo "Nous sommes à l'intérieur de la fonction. La valeur du paramètre \$nbADoubler est $nbADoubler.<br>";
        $resultatCalcul = $nbADoubler * 2;
        return $resultatCalcul;
    }

    //exemple d'appel de la fonction
    echo "Nous sommes dans le programme principal AVANT l'appel de la fonction.<br>";
    $leNombreADoubler = 6;
    $resultat = calculeDoubleValeur($leNombreADoubler);
    echo "Nous sommes APRÈS l'appel de la fonction.<br>";
    echo "Le nombre doublé donne $resultat";
    ?>
    <h1>Exercice 1 : Celsius à Fahrenheit</h1>
    <?php 
    /*
    *   Fonction celsiusAFahrenheit
    *       Description : Convertit un nombre de degrés Celsius en degrés Fahrenheit
            Paramètres :
                $nbDegresC : nombre de degrés celsius, réel
            Valeur de retour : 
                réel, le nombre de degrés Fahrenheit correspondant a $nbDegresC en Celsius

                Le calcul est 9 / 5 x degC + 32 nous donne les degF
    */
    
    function celsiusAFahrenheit($nbDegresC)
    {
        $degF = 9 / 5 * $nbDegresC + 32;
        return $degF;
    }

    //exemple d'utilisation de la fonction
    $degresC = 30;
    echo "$degresC degrés C en Fahrenheit donne " . celsiusAFahrenheit($degresC);
    ?>
<h1>La table des températures de demain</h1>
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
<h1>Exemple de fonction avec paramètres optionnels</h1>
<?php 
    //exemple de fonction (c'est une procédure parce qu'elle ne retourne rien) avec paramètre optionnel (nbRepetitions va prendre la valeur 1 si aucune valeur n'est spécifiée lors de l'appel)
    //le premier paramètre est obligatoire parce qu'il n'a pas de valeur par défaut
    //le deuxième paramètre est facultatif parce qu'il a une valeur par défaut
    function repeteMessage($message, $nbRepetitions = 1)
    {
        for($i = 1; $i <= $nbRepetitions; $i++)
            echo $message . "<br>";
    }

    //exemples d'appels 
    echo "J'appelle repeteMessage avec un nombre de répétitions spécifié à 10.<br>";
    repeteMessage("Ceci est le message.", 10);
    echo "J'appelle repeteMessage sans spécifier le nombre de répétitions<br>";
    repeteMessage("Ceci est le message.");
    repeteMessage("Test", "Allo");

?>
</body>
</html>