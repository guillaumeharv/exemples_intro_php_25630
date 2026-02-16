<?php
    //disons qu'un panier contient des fruits, et qu'à chaque fruit est associé une quantité.
    $panier1 = [
        "pomme" => 4,
        "banane" => 0,
        "pamplemousse" => 2
    ];

    $panier2 = [
        "pomme" => 0,
        "banane" => 10,
        "pamplemousse" => 0
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le panier de fruits</title>
</head>
<body>
    <form method="GET">
        Choisissez le panier que vous voulez afficher : 
        <select name="panier">
            <option value="1">Le premier panier</option>
            <option value="2">Le deuxième panier</option>
        </select><br>
        N'afficher que les éléments dont la quantité est plus grande que zéro : 
        <input type="checkbox" name="plusQueZero"/><br>
        <input type="submit" name="btnSubmit" value="Afficher"/>
    </form>
    <?php 
    //est-ce qu'on arrive du formulaire?
    if(isset($_GET["btnSubmit"]))
    {
        echo "<ul>";
        //est-ce que c'est le premier panier?
        if($_GET["panier"] == 1)
        {
            //est-ce que le checkbox est coché? 
            if(isset($_GET["plusQueZero"]))
            {
                //si le checkbox est coché, on n'affiche QUE les fruits dont la quantité est plus grande que zéro
                foreach($panier1 as $fruit => $quantite)
                {
                    if($quantite > 0)  //on affiche seulement les fruits dont la quantité est plus grande que zéro
                        echo "<li>$fruit : $quantite</li>";
                }
            }
            else 
            {
                //on affiche tous les fruits
                foreach($panier1 as $fruit => $quantite)
                {
                    echo "<li>$fruit : $quantite</li>";
                }
            }

            
        }
        else //pour le deuxième panier 
        {
            //est-ce que le checkbox est coché? 
            if(isset($_GET["plusQueZero"]))
            {
                //on boucle à travers le panier
                foreach($panier2 as $fruit => $quantite)
                {
                    if($quantite > 0) //on affiche seulement les fruits dont la quantité est plus grande que zéro
                        echo "<li>$fruit : $quantite</li>";
                }
            }
            else 
            {
                //on boucle à travers le panier
                foreach($panier2 as $fruit => $quantite)
                {
                    echo "<li>$fruit : $quantite</li>";
                }
            }
            
        }

        echo "</ul>";
    }
    ?>
</body>
</html>