<?php 
    $nombre1 = "";
    $nombre2 = "";
    $operateur = "+";
    //si j'ai reçu les paramètres, les affecter aux variables
    if(isset($_GET["nombre1"]) && isset($_GET["nombre2"]) && isset($_GET["operateur"]))
    {
        $nombre1 = $_GET["nombre1"];
        $nombre2 = $_GET["nombre2"];
        $operateur = $_GET["operateur"];
    }

?><html>
    <body>
        <h1>La Calculatrice</h1>
        <form name="calculatrice" method="GET">
            <input type="number" name="nombre1" value="<?= $nombre1 ?>"/>
            <select name="operateur">
                <option <?php if($operateur == "+") echo "selected"; ?>>+</option>
                <option <?php if($operateur == "-") echo "selected"; ?>>-</option>
                <option <?php if($operateur == "*") echo "selected"; ?>>*</option>
                <option <?php if($operateur == "/") echo "selected"; ?>>/</option>
            </select>
            <input type="number" name="nombre2" value="<?= $nombre2 ?>"/>
            <input type="submit" value="Calculer">
        </form>
        <h2>Résultat</h2>
        <?php
            //traitement
            if(isset($_GET["nombre1"]) && isset($_GET["nombre2"]) && isset($_GET["operateur"]))
            {
                if(is_numeric($_GET["nombre1"]) && is_numeric($_GET["nombre2"]))
                {
                    //on arrive du formulaire
                    switch($_GET["operateur"])
                    {
                        case "+":
                            $reponse = $_GET["nombre1"] +  $_GET["nombre2"]; 
                            break;
                        case "-":
                            $reponse = $_GET["nombre1"] - $_GET["nombre2"]; 
                            break;
                        case "*":
                            $reponse = $_GET["nombre1"] *  $_GET["nombre2"]; 
                            break;
                        case "/":
                            if($_GET["nombre2"] == 0)
                                $reponse = "Division par zéro impossible.";
                            else
                                $reponse = $_GET["nombre1"] /  $_GET["nombre2"]; 
                            break;
                        default:
                            $reponse = "Opération impossible.";
                    }
                }
                else 
                {
                    $reponse = "Les opérandes doivent être numériques.";
                }
                echo $reponse;
            }
        ?>
    </body>
</html>