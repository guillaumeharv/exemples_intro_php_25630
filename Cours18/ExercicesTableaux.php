<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Exercice 1 : Le tableau de fruits</h1>
    <?php 
    //déclaration du tableau
    $fruits = ["mangue", "banane", "pamplemousse", "mangue", "bleuet"] ; 
    ?>
    <h2>1.1 Avec la boucle for</h2>
    <table border="1">
        <tr>
            <th>Index</th>
            <th>fruit</th>
        </tr>
    <?php 
    //affichage avec la boucle for
        for($i = 0; $i < count($fruits); $i++)
        {
            //echo "<tr><td>$i</td><td>$fruits[$i]</td></tr>";
        ?>
            <tr>
                <td><?=  $i ?></td>
                <td><?=  $fruits[$i] ?></td> 
            </tr> 
        <?php
        }
    ?>
    </table>
    <h2>1.1 Avec la boucle foreach</h2>
    <table border="1">
        <tr>
            <th>Fruit</th>
        </tr>
        <?php foreach($fruits as $f){ ?>
            <tr>
                <td><?= $f ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <h1>1.2 La recherche dans le tableau</h1>
    <?php 
    // $fruits = ["banane", "pamplemousse", "mangue", "bleuet"] ; 
    $fruitRecherche = "poire";
    $trouve = false;
    $tailleTableau = count($fruits);
    //identifier si oui ou non le fruit recherché est présent dans le tableau avec une boucle, et si oui, spécifier l'index du fruit trouvé. 
    for($i = 0; $i < $tailleTableau ; $i++)
    {
        if($fruitRecherche == $fruits[$i])
        {
            //on a trouvé le fruit
            $trouve = true;
            echo "Le fruit $fruitRecherche est à la position $i dans le tableau.";
            break;
        }
    }

    //est-ce qu'on n'a pas trouvé le fruit?
    if($trouve == false) //ou encore if($i == $tailleTableau)
    {
        //si non, afficher que le fruit n'est pas dans le tableau
        echo "Le fruit n'est pas dans le tableau.";
    }
    ?>
    <h1>Exercice 2 : Le tableau des températures</h1>
    <?php 
    $temperaturesSemaine = [3, -2, 10, -1, 5, 3, -1]; 
    $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    ?>
    <h2>2.1 La moyenne</h2>
    <?php 
    $somme = 0;

    //plus simple avec la boucle foreach ici parce qu'on n'a pas besoin de l'index
    foreach($temperaturesSemaine as $temp)
        $somme += $temp;

    $moyenne = $somme / count($temperaturesSemaine);
    //avec array_sum, c'est encore plus simple, pas besoin de boucle
    //$moyenne = array_sum($temperaturesSemaine) / count($temperaturesSemaine);
    ?>
    <p>La moyenne des températures de la semaine est <?=  $moyenne ?></p>
    <!-- version avec arrondissement -->
    <p>La moyenne des températures de la semaine est <?=  number_format($moyenne, 2) ?></p>
    <h2>2.1 Froid ou chaud (première version)</h2>
    <table border="1">
        <tr><th>Jour</th><th>Température</th></tr>
        <?php
            for($i = 0; $i < count($jours); $i++)
            {
                if($temperaturesSemaine[$i] < 0)
                    $classTemp = "bleu";
                else 
                    $classTemp = "rouge";

                //version originale
                echo "<tr>
                    <td>$jours[$i]</td>
                    <td class=\"$classTemp\">$temperaturesSemaine[$i]</td>
                </tr>";
            }
        ?>
    </table>
    <h2>2.1 Froid ou chaud (deuxième version - plus optimale)</h2>
    <table border="1">
        <tr><th>Jour</th><th>Température</th></tr>
        <?php
            for($i = 0; $i < count($jours); $i++)
            {
                /*
                if($temperaturesSemaine[$i] < 0)
                    $classTemp = "bleu";
                else 
                    $classTemp = "rouge";
                */

                //équivalent de la structure conditionnelle ci-haut
                $classTemp = ($temperaturesSemaine[$i] < 0) ? "bleu" : "rouge";

                //version en essayant de sortir le HTML le plus possible du PHP
                ?>
                <tr>
                    <td><?= $jours[$i] ?></td>
                    <td class="<?= $classTemp ?>"><?= $temperaturesSemaine[$i] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>