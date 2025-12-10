<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Bonjour le monde!"; ?></h1>
    <!-- Ceci est un commentaire HTML -->
    <?php 
        //Ceci est un commentaire PHP sur une seule ligne.
       
        /* 
            Ceci est 
            un commentaire
            sur plusieurs
            lignes.
        */

        //snake_case
        //$message_bienvenue    
        //camelCase
        $messageBienvenue = "Bienvenue sur mon site.";
        //$messageBienvenue = 18;
        //$messageBienvenue = true;

        //exemple de concaténation
        echo "<p>" . $messageBienvenue . "</p>";

        $monBooleen = false;
        echo $monBooleen;
    ?>
</body>
</html>