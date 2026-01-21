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

    //...autres fonctions
    /*
    *   Fonction calculeDoubleValeur
    *       Description : Calcule le double d'une valeur envoyée en paramètres
            Paramètres :
                $nbADoubler : nombre à doubler
            Valeur de retour : 
                réel, le double du nombre envoyé en paramètres
    */
    function calculeDoubleValeur($nbADoubler)
    {
        //habituellement on n'utilise pas echo dans une fonction, c'est simplement pour tester dans ce cas-ci
        echo "Nous sommes à l'intérieur de la fonction. La valeur du paramètre \$nbADoubler est $nbADoubler.<br>";
        $resultatCalcul = $nbADoubler * 2;
        return $resultatCalcul;
    }
