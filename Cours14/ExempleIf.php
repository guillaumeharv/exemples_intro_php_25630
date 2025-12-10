<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La structure Si</h1>
    <?php 
    $x = 33; 

    //Pour traduire le SI, on utilise if 

    //si vous avez une seule instruction conditionnelle, pas besoin des accolades
    if($x > 0) //attention : PAS de point-virgule à la fin du if
        echo "$x est plus grand que zéro.<br>";
     
    //si vous avez plusieurs instructions conditionnelles, on délimite le bloc avec des accolades
    if($x >= 10)
    {
        echo "$x est plus grand ou égal à 10<br>";
        echo "La valeur de \$x est effectivement de $x.<br>";
    }
    
    echo "<br><br><br>";

    //très important : la comparaison en PHP n'est pas le simple égal, mais bien le double égal
    //cette structure conditionnelle va en fait changer la valeur de x et l'évaluation de l'expression booléenne sera toujours vraie puisque tous les entiers différents de zéro donnent vrai
    //if($x = 5)
    //    echo "La valeur de x est $x.<br>";

    //la comparaison doit se faire avec le double égal
    if($x == 5)
        echo "La valeur de x est 5.<br>";

    echo "Fin du programme.";
    ?>  
    <h1>La structure Si / Sinon</h1>
    <?php 

    //la structure Si / Sinon 
    $y = 60;

    if($y > 50)
    {
        echo "\$y (valeur de $y) est plus grand que 50.<br>";
    }
    else 
    {
        echo "\$y (valeur de $y) est plus petit ou égal à 50.<br>";
    }
    ?>
    <h1>Travailler avec des booléens (table des vérités)</h1>
    <?php 
    /* 
    monBooleen      monBooleen == true      monBooleen != true   monBooleen == false  !monBooleen  
    true                true                    false                false              false
    false               false                   true                 true               true
    */
    $monBooleen = false;

    //les deux prochaines comparaisons donnent le même résultat
    if($monBooleen == true)
    {
        echo "L'expression est vraie parce que \$monBooleen est vrai.<br>";
    }

    if($monBooleen)
    {
        echo "L'expression est vraie parce que \$monBooleen est vrai.<br>";
    }

    //les 3 prochaines comparaisons sont identiques
    if($monBooleen == false)
    {
        echo "L'expression est vraie parce que \$monBooleen est faux.<br>";
    }

    if($monBooleen != true)
    {
        echo "L'expression est vraie parce que \$monBooleen est faux.<br>";
    }

    if(!$monBooleen)
    {
        echo "L'expression est vraie parce que \$monBooleen est faux.<br>";
    }

    ?>
    <h1>Les structures Si / Sinon Si / Sinon complexes</h1>
    <?php 
    $x = 35;

    if($x > 50)
    {
        echo "\$x est plus grand que 50. Sa valeur est $x.";
    }
    else if($x > 0)
    {
        echo "\$x n'est pas plus grand que 50, mais est plus grand que 0. Sa valeur est $x.";
    }//vous pourriez avoir d'autres else if ici
    else //va contenir tous les cas qui n'ont pas remplis les conditions précédentes
    {
        //le else sans if est toujours le dernier else
        echo "\$x n'est ni plus grand que 50, ni plus grand que 0. Sa valeur est $x.";
    }
    ?>
</body>
</html>