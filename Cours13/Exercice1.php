<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //déclaration des variables
        $prenom = "Guillaume";
        $nom = "Harvey";
        $age = 44;
        $villeNaissance = "Chicoutimi";
        $paysNaissance = "Canada";
    ?>
    <h1>Caractéristiques personnelles</h1>
    <ul>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Âge : <?php echo $age . " ans"; ?></li>
        <li>Âge : <?php echo "$age ans"; ?></li>
        <li>Ville de naissance : <?php echo $villeNaissance; ?></li>
        <li>Pays de naissance : <?php echo $paysNaissance; ?></li>
    </ul>
</body>
</html>