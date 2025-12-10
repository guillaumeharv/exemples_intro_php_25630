<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("America/New_York");
    //echo date("d F");
    echo date('l jS \of F Y h:i:s A') . "\n";
    $jour = date("j");
    
    echo "<br>";
    echo "Nous sommes le jour #$jour du mois.<br>";
    ?>
</body>
</html>