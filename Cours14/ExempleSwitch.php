<?php 
    //cette variable sera utilisée dans le if et dans le switch
    $couleurPref = "bleu";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Une structure facile à transformer en switch/case</h1>
<?php 
    //cette variable sera utilisée dans le if et dans le switch
    $couleurPref = "bleu";
    //structure facile à transformer en switch/case
    if($couleurPref == "gris")
    {
        echo "Moi aussi j'aime bien le gris.";
    }    
    else if($couleurPref == "bleu")
    {
        echo "Le bleu c'est joli.";
    }
    else if($couleurPref == "rouge" || $couleurPref == "orange")
    {
        if($couleurPref == "rouge")
            echo "J'aime le rouge. ";
        
        echo "Orange et rouge sont des couleurs populaires...<br>";
    }
    else 
    {
        echo "Je n'ai rien à dire sur cette couleur.";
    }

?>
<h1>L'équivalent avec switch/case</h1>
<?php 
    switch($couleurPref)
    {
        case "gris":
            echo "Moi aussi j'aime bien le gris.";
            break;
        case "bleu":
            echo "Le bleu c'est joli.";
            break;
        case "rouge":
            echo "J'aime le rouge. ";
        case "orange":
            echo "Orange et rouge sont des couleurs populaires...<br>";
            break;
        default:
            echo "Je n'ai rien à dire sur cette couleur.";
    }
?>
</body>
</html>