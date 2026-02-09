<?php 
    //variables pour le code postal
    $codePostal = "";
    $messageCP = "";
    $valideCP = false;

    //variables pour le numéro de téléphone
    $numTel = "";
    $messageNumTel = "";
    $valideNumTel = false;
    //si on arrive avec le bouton submit - le formulaire devrait être rempli
    if(isset($_GET["btnSubmit"]))
    {
        //validation du code postal
        $codePostal = $_GET["codePostal"];

        //valider si le code postal entré par l'usager est valide (le modificateur i après le slash de fin est pour "case insensitive")
        $regExpCodePostal = "/^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z] ?\d[ABCEGHJ-NPRSTV-Z]\d$/i";
        $resultat = preg_match($regExpCodePostal, $codePostal);

        //selon la doc @ https://www.php.net/manual/fr/function.preg-match.php
        //si ça retourne false, l'expression régulière est invalide 
        //si ça retourne 1, le code postal est valide
        //si ça retourne 0, le code postal est invalide
        if($resultat === 0)
        {
            //code postal invalide
            $messageCP = "Le code postal est invalide.";
            $codePostal = "";
        }
        else if($resultat === 1)
        {
            $valideCP = true;
        }

        //validation du numéro de téléphone
        $numTel = $_GET["numTel"];

         //valider si le numéro de téléphone entré par l'usager est valide
        $regExpNumTel = "/^(\(\d{3}\)|\d{3}-)\d{3}-\d{4}$/";
        $resultat = preg_match($regExpNumTel, $numTel);

        if($resultat === 0)
        {
            //code postal invalide
            $messageNumTel = "Le numéro de téléphone  est invalide.";
            $numTel = "";
        }
        else 
        {
            $valideNumTel = true;
        }
    }

    //valider tous les champs
    if($valideCP && $valideNumTel)
    {
        header("Location: Valide.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Entrez votre code postal : <input type="text" name="codePostal" value="<?= $codePostal ?>"/><span><?= $messageCP ?></span>
        <br>
        Entrez votre numéro de téléphone : <input type="text" name="numTel" value="<?= $numTel ?>"/><span><?= $messageNumTel ?></span>
        <br>
        <input name="btnSubmit" type="submit" value="Soumettre"/>
    </form>
    <!-- required pattern="^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z] ?\d[ABCEGHJ-NPRSTV-Z]\d$" -->
</body>
</html>