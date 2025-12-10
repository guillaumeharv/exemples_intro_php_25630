<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1 : La somme des 25 premiers entiers</h1>
    <?php 
/*
    Faire une boucle while qui calcule et affiche la somme des entiers compris entre 1 et 25.  
    1 + 2 + 3 + 4... + 23 + 24 + 25 = ? 
*/
    $somme = 0;
    $i = 1;

    //tant que i est plus petit ou égal à 25
    while($i <= 25)
    {
        //on ajoute i dans la somme
        //$somme = $somme + $i; //équivalent
        $somme += $i; 
        $i++;//instruction qui nous rapproche de la sortie
    }

    echo "La somme des entiers compris entre 1 et 25 est $somme.";
?>
    <h1>Exercice 2 : La table des multiples de 3</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Multiple de 3</th>
        </tr>
        <?php
            $i = 1;
            while($i <= 20)
            {
                $multipleDe3 = "Non";
                if($i % 3 == 0)
                    $multipleDe3 = "Oui"; 

                /*
                if($i % 3 == 0)
                    $multipleDe3 = "Oui"; 
                else 
                    $multipleDe3 = "Non";
                */

                //avec l'opérateur ternaire 
                //https://www.php.net/manual/fr/language.operators.comparison.php#language.operators.comparison.ternary
                //$multipleDe3 = ($i % 3 == 0 ? "Oui" : "Non")
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $multipleDe3 ?></td>
                </tr>
            <?php
                $i++;
            } 
        ?>
        <?php
            $i = 1;
            while($i <= 20)
            {
                $multipleDe3 = "Non";
                if($i % 3 == 0)
                    $multipleDe3 = "Oui"; 
                echo "<tr>
                    <td>$i</td>
                    <td>$multipleDe3</td>
                    </tr>";
                $i++;
            } 
        ?>
    </table>
    <h1>Exercice 3 : La somme maximale de 1000</h1>
    <?php 
    $i = 0;
    $somme = 0;
    $somme_a_atteindre = 1000;

    do 
    {
        $i++;
        $somme += $i;
        echo "\$i a comme valeur $i, la somme a comme valeur $somme<br>";
    }
    while($somme < $somme_a_atteindre);

    echo "Il faut se rendre jusqu'à n = $i dans la suite 1 + 2 + 3 + 4 + ... + n pour atteindre la somme de $somme_a_atteindre.";

    ?>
    <h1>Exercice 4-1 : Le calcul de la factorielle</h1>
    <?php 
    $nombre = 5;
    $i = 1;
    $factorielle = 1;
    while($i <= $nombre)
    {
        //$factorielle = $factorielle * $i;
        $factorielle *= $i;
        $i++;
    }

    echo "La factorielle de $nombre est $factorielle.<br>";
?>
    <h1>Exercice 4-2 : La liste des factorielles</h1>
    <ul>
        <?php 
        
            $nombre = 1;
            while($nombre <= 10)
            {
                $i = 1;
                $factorielle = 1;
                while($i <= $nombre)
                {
                    //$factorielle = $factorielle * $i;
                    $factorielle *= $i;
                    $i++;
                }
                ?>
                <li>La factorielle de <?= $nombre ?> est <?= $factorielle ?>.</li>   
                <?php
                $nombre++; 
            } 
        ?>
    </ul>
     <h1>Exercice 5 : Le nombre premier</h1>
     <?php 
        $nombre = 17;
        $i = 2;
        $premier = true;
        //algorithme pour déterminer qu'un nombre est premier ou pas
        while($i <= $nombre / 2 && $premier)
        {
            if($nombre % $i == 0)
                $premier = false;
            
            $i++;
        }

        if($premier)
            echo "Le nombre $nombre est premier.";
        else 
            echo "Le nombre $nombre n'est pas premier.";
     ?>
     <h1>Exercice 5 : Le nombre premier avec BREAK</h1>
     <?php 
        $nombre = 17;
        $i = 2;
        $premier = true;
        //algorithme pour déterminer qu'un nombre est premier ou pas
        while($i <= $nombre / 2)
        {
            if($nombre % $i == 0)
            {
                $premier = false;
                break;
            }
            $i++;
        }

        if($premier)
            echo "Le nombre $nombre est premier.";
        else 
            echo "Le nombre $nombre n'est pas premier.";
     ?>
</body>
</html>