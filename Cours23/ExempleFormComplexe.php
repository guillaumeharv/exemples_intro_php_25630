<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Court texte : <input type="text" name="courtTexte" /><br>
        Long texte : <textarea name="longTexte"></textarea><br>
        La case à cocher : <input type="checkbox" name="leCheckbox" value="valeurDuCheckbox"><br>
        Le bouton radio : <br>
        Oui : <input type="radio" name="leRadio" value="oui" checked><br>
        Non : <input type="radio" name="leRadio" value="non"><br>
        Pour faire un choix avec un select : 
        <select name="leSelect">
            <option value="fr">Français</option>
            <option value="an" >Anglais</option>
            <option value="es" selected>Espagnol</option>
        </select>
        <select name="leSelectMultiple[]" multiple>
            <option value="fr">Français</option>
            <option value="an">Anglais</option>
            <option value="es">Espagnol</option>
        </select>
        <input type="submit" name="btnSubmit" value="Envoyer"/>
    </form>
    <?php 

    //est-ce qu'on arrive du formulaire - on arriverait en POST
    //if($_SERVER["REQUEST_METHOD"] == "POST")
    if(isset($_POST["btnSubmit"]))
    {

        //vérifier si on a reçu le paramètre courtTexte
        if(isset($_POST["courtTexte"]))
        {
            echo "Le court texte contient : " . $_POST["courtTexte"];
            echo "<br>";
        }

        //traitement d'un long texte - pareil qu'un texte normal
        if(isset($_POST["longTexte"]))
        {
            echo "Vous avez tapé dans le long texte : " . $_POST["longTexte"];
            echo "<br>";
        }

        //au niveau du checkbox, il y a une différence : 
        //isset retourne vrai seulement si le checkbox a été coché et faux si le checkbox n'a pas été coché
        if(isset($_POST["leCheckbox"]))
        {
            echo "Vous avec coché le checkbox et sa valeur était " . $_POST["leCheckbox"];
            echo "<br>";
        }
        else 
        {
            echo "Vous n'avez pas coché le checkbox.";
            echo "<br>";
        }    

        //théoriquement, on ne devrait jamais arriver au else parce que vous allez mettre un des radio à checked
        if(isset($_POST["leRadio"]))
            echo "Vous avec choisi une valeur avec le radio button et sa valeur était " . $_POST["leRadio"];
        else 
            echo "Vous n'avez pas choisi de valeur avec le radio button.";

        echo "<br>";

        //il y a toujours une valeur sélectionnée dans un SELECT
        echo "Dans le select, l'option choisie est : " . $_POST["leSelect"];
        echo "<br>";

        //traitement du select multiple, plus complexe
        //nécessite une boucle foreach

        //on vérifie qu'au moins une option a été sélectionnée
        if(isset($_POST["leSelectMultiple"]))
        {
            echo "Vous avez sélectionné les options suivantes : ";
            echo "<ul>";
            foreach($_POST["leSelectMultiple"] as $option)
            {
                echo "<li>$option</li>";
            }
            echo "</ul>";
        }
        else 
            echo "Vous n'avez rien sélectionné dans le select multiple.";

    }
    else
    {
        //on est arrivé avec la méthode GET - on affiche simplement le formulaire
        echo "Veuillez remplir le formulaire et cliquer sur le bouton soumettre.";
    }
    ?>
</body>