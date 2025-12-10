<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $monBooleen = true;
    $test = "Allo";
    if($monBooleen)
    {
        //echo "<p>Ceci est un test.</p>";
?>
    <p>Ceci est un test. Voici le contenu de la variable $test : <?= $test ?></p>
<?php
    }
?>
</body>
</html>