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
            //générer les liens vers ExempleFactorielleGet pour permettre de calculer les factorielles de 1 à 20
            for($i = 1; $i <= 20; $i++)
            {
                ?>
                <li><a href="ExempleFactorielleGet.php?fact=<?= $i ?>">Calculer la factorielle de <?= $i ?></a></li>
                <?php
            }
        ?>
    </ul>
</body>
</html>