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
        for($i = 1; $i <= 12; $i++)
        {
            echo "<li><a href='TableMulti.php?nombre=$i'>Afficher la table de multiplication du nombre $i</a></li>";
        }
    ?>
    </ul>
    <a href="FormulaireTableMulti.html">Aller au formulaire</a>
</body>
</html>