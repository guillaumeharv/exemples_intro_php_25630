<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 4 : Les piles ou faces</h1>
    <h2>Les 20 lancers</h2>
    <?php 
    /* 
    a) Avec une boucle for et en utilisant la fonction rand (voir exemple), écrire un algorithme qui calcule le nombre de fois que l'on obtient pile (le nombre aléatoire 0) et le nombre de fois que l'on obtient face (le nombre aléatoire 1) lorsque l'on lance une pièce dans les airs 20 fois. Le résultat changera à chaque fois… 
    */

    $nbPiles = 0;
    $nbFaces = 0;

    //boucle pour répéter 20 fois le lancer
    for($i = 1; $i <= 20; $i++)
    {
        $lancer = rand( 0,1);

        //si c'est 0, c'est pile
        if($lancer == 0)
        {
            $nbPiles++;
            echo "Pile<br>";
        }
        else 
        {   
            //sinon c'est face               
            $nbFaces++;
            echo "Face<br>";
        }
    }

    echo "Après 20 lancers, on a obtenu $nbPiles fois pile et $nbFaces fois face.";

    ?>
    <h2>Trois fois piles de façon consécutive</h2>
    <?php 
/*
    b) Avec une boucle while, écrire un autre algorithme qui lance la pièce sans cesse jusqu'à  ce que l'on obtienne trois fois pile de façon CONSÉCUTIVE (pile, face, pile, pile ne fonctionne pas!). Votre algorithme doit calculer le nombre de fois qu'on a dû lancer la pièce dans les airs pour obtenir trois fois pile de façon consécutive. Il n'y a pas de maximum! 
 

    Indice : Comment faire pour s'assurer que les trois fois sont consécutives? Il faut remettre à zéro le compteur dans une situation bien précise. 
*/

    $nbLancers = 0;
    $pilesConsecutives = 0;

    //tant qu'on n'a pas obtenu trois fois pile de façon consécutive
    while($pilesConsecutives < 3)
    {
        //on effectue le lancer
        $lancer = rand( 0,1);
        $nbLancers++;

        //si c'est pile
        if($lancer == 0)
        {
            //le nombre de fois qu'on a eu pile de façon consécutive est incrémenté de 1
            $pilesConsecutives++;
            echo "Pile<br>";
        }
        else 
        {   
            //sinon c'est face, et on doit remettre le compteur de piles consécutives à zéro
            $pilesConsecutives = 0;           
            echo "Face<br>";
        }
    }

    echo "Il a fallu $nbLancers lancers pour obtenir trois fois pile de façon consécutive.";


//version avec break
/*
    $nbLancers = 0;
    $pilesConsecutives = 0;

    //on boucle sans cesse
    while(true)
    {
        //on effectue le lancer
        $lancer = rand( 0,1);
        $nbLancers++;

        //si c'est pile
        if($lancer == 0)
        {
            //le nombre de fois qu'on a eu pile de façon consécutive est incrémenté de 1
            $pilesConsecutives++;
            echo "Pile<br>";

            //si ça fait trois fois pile de façon consécutive, on sort de la boucle
            if($pilesConsecutives == 3)
                break;
        }
        else 
        {   
            //sinon c'est face, et on doit remettre le compteur de piles consécutives à zéro
            $pilesConsecutives = 0;           
            echo "Face<br>";
        }
    }

    echo "Il a fallu $nbLancers lancers pour obtenir trois fois pile de façon consécutive.";
*/
    ?>
</body>
</html>