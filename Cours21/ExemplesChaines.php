<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $maChaine = "bonjour";

    //lorsqu'on travaille avec une chaine non-accentuée (utilisant ASCII), on peut utiliser les brackets carrés pour accéder à un caractère dans une position donnée de la chaine
    echo "Le deuxième caractère dans la chaine $maChaine est : " . $maChaine[1] . "<br>";

?>
<h1>Liste de caractères dans le mot <?= $maChaine ?></h1>
<ul>
    <?php 
    //ce genre de boucle ne fonctionne que pour les caractères ASCII
    for($i = 0; $i < strlen($maChaine); $i++)
    {
        echo "<li>$i : $maChaine[$i]</li>";
    }

    //ATTENTION, TOUT CE QUI PRÉCÈDE NE FONCTIONNE QUE POUR LES CARACTÈRES SUR UN OCTET (ASCII)
    ?>
</ul>
 <?php 

    $maChaine = "élève";

    //quand on travaille avec des caractères qui sont représentés sur plusieurs octets (comme par exemple en UTF-8 ou UTF-16), il faut travailler avec les fonctions multi-octets (multibytes) qui commencent pratiquement toutes par mb_
    echo "La chaine $maChaine a une longueur de " . mb_strlen($maChaine, "UTF-8") . " caractères.<br>";
    //echo "La chaine $maChaine à partir du caractère 1 : " . mb_substr($maChaine, 1) . "<br>";

?>
<h1>Liste de caractères dans le mot <?= $maChaine ?></h1>
<ul>
    <?php 
    //les brackets pour accéder à un caractère en particulier ne fonctionne pas en encodage UTF-8, il faut absolument utiliser la fonction mb_
    //ce genre de boucle ne fonctionne que pour les caractères ASCII
    for($i = 0; $i <  mb_strlen($maChaine, "UTF-8"); $i++)
    {
        //echo "<li>$i : " . $maChaine[$i] . "</li>";
        echo "<li>$i : " . mb_substr($maChaine, $i, 1, "UTF-8") . "</li>";
    }
    ?>
</ul>
<h1>Exemple de changement de minuscule à majuscule</h1>
<?php 
    //EXEMPLE D'UTILISATION DE STRTOUPPER
    $maChaine = "bonjour";
    $maChaineMaj = strtoupper($maChaine);
    echo $maChaineMaj . "<br><br>";
?>
<h1>Exemple de changement de minuscule à majuscule avec accents</h1>
<?php 
    //EXEMPLE D'UTILISATION DE STRTOUPPER
    $maChaine = "élève";
    $maChaineMaj = mb_strtoupper($maChaine, "UTF-8");
    echo $maChaineMaj . "<br><br>";

    //pour aller en minuscules, c'est mb_strtolower
?>
<h1>Trouver un caractère dans une chaine</h1>
<?php 
    $courriel = "@gharveycmaisonneuve.qc.ca";
    //est-ce qu'il y a un @ dans la chaine courriel?
    $positionArobas = mb_strpos($courriel, "@");

    //attention - lorsque vous comparez le résultat de mb_strpos, gardez en tête que la fonction peut retourner false ou un entier, et que zéro et false ont la même valeur dans une comparaison booléenne
    /*if($positionArobas != false)
    {
        //il y a un arobas
        echo "L'arobas est présent à la position $positionArobas dans $courriel.";
    }
    else 
    {
        echo "L'arobas est absent dans $courriel.";
    }
*/

    //en utilisant le ===, on s'assure de comparer à la fois les types et les valeurs
    //c'est à dire que l'on ne va pas faire la conversion de type lorsque l'on va comparer un entier à un booléen - on va tout simplement dire que la comparaison donne faux
    if($positionArobas === false)
    {
        echo "L'arobas est absent dans $courriel.";
    }
    else 
    {
         //il y a un arobas
        echo "L'arobas est présent à la position $positionArobas dans $courriel.";
    }

    //équivalent à 
    if($positionArobas !== false)
    {
        //il y a un arobas
        echo "L'arobas est présent à la position $positionArobas dans $courriel.";
    }
    else 
    {
        echo "L'arobas est absent dans $courriel.";
    }
?>
<h1>Élagage d'une chaîne</h1>
<?php 
    $chaine = "              Guillaume Harvey                              ";
    echo "La longueur de la chaine $chaine est : " . strlen($chaine) . "<br>";
    var_dump($chaine);
?>
<pre><?php echo $chaine; ?></pre>
<?php 
    $chaine = "              Guillaume Harvey                              ";
    $chaineElagage = trim($chaine);
    echo "La longueur de la chaine $chaine est : " . strlen($chaineElagage) . "<br>";
    var_dump($chaineElagage);
?>
<pre><?php echo $chaineElagage; ?></pre>
<h1>Exemple avec str_replace</h1>
<?php 
    $maPhrase = "J'aime beaucoup les chats. J'ai deux chats. Mon chat préféré s'appelle Stéphane.";
    $nombreDeRemplacements = 0;
    $maNouvellePhrase = str_replace("chat", "chien", $maPhrase, $nombreDeRemplacements);
    echo $maNouvellePhrase;
    echo "<br>J'ai fait $nombreDeRemplacements remplacements.";
?>
<h1>Utiliser mb_str_split pour traverser une chaîne multioctets</h1>
<?php
    $maChaine = "élève";
    $maChaineEnTableau = mb_str_split($maChaine);
 
    var_dump($maChaineEnTableau);
    for($i = 0; $i < count($maChaineEnTableau); $i++)
    {
        echo "Caractère #$i : " . $maChaineEnTableau[$i] . "<br>";
    }
?>
<h1>Utiliser explode et implode</h1>
<?php 
    $laPhrase = "Bonjour, mon nom est Guillaume et je suis votre professeur.";
    $laPhraseEnMots = explode(" ", $laPhrase);

    echo "<pre>";
    print_r($laPhraseEnMots);
    echo "</pre>";

    //ici, le tableau $laPhraseEnMots est envoyé par RÉFÉRENCE (voir l'éperluette dans la signature, dans la documentation)
    //il sera donc MODIFIÉ par la fonction sort et vous n'aurez plus la copie non-triée (elle a été ÉCRASÉE)
    sort($laPhraseEnMots);

    echo "<pre>";
    print_r($laPhraseEnMots);
    echo "</pre>";

    $laPhraseOrdonnee = implode(" ", $laPhraseEnMots);
    echo $laPhraseOrdonnee;

?>
</body>
</html>