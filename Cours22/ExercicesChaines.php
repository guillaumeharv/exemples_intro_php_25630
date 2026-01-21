<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1 : Le message codé</h1>
    <?php 
    /*

    Sans utiliser str_replace, faites un algorithme qui traite une chaine de caractères nommée $message et qui remplace tous les a par des 4, les e par des 3, les i par des 1 et les o par des 0. 

    Ex : bonjour les amis deviendra b0nj0ur l3s 4m1s 
    */

   
    $message = "bonjour les élèves";
    $nouvelleChaine = "";

    //version en anglais (sans caractères accentués)

    //mettre tout en minuscules
    $message = strtolower($message);

    //parcourir la chaine 
    for($i = 0; $i < strlen($message); $i++)
    {
        //ajouter dans la nouvelle chaine le caractère approprié pour remplacer le caractère courant
        switch($message[$i])
        {
            case "a":
                $nouvelleChaine .= "4";
                break;
            case "e":
                $nouvelleChaine .= "3";
                break;
            case "i":
                $nouvelleChaine .= "1";
                break;
            case "o":
                $nouvelleChaine .= "0";
                break;
            default:
                $nouvelleChaine .= $message[$i];
        }
    }

    echo "La chaine '$message', lorsque traduite, donne '$nouvelleChaine'<br>";

    //version en français pour traiter les caractères accentués

    //mettre tout en minuscules 
    $message = mb_strtolower($message);
    $nouvelleChaine = "";

    //parcourir la chaine (en UTF-8)
    for($i = 0; $i < mb_strlen($message); $i++)
    {
        //obtenir le caractère traité (on ne peut pas utiliser les [])
        $caractere = mb_substr($message, $i, 1);

        //ajouter le caractère approprié à la nouvelle chaîne
        switch($caractere)
        {
            case "a":
            case "à":
            case "â":
                $nouvelleChaine .= "4";
                break;
            case "e":
            case "é":
            case "è":
            case "ê":
                $nouvelleChaine .= "3";
                break;
            case "i":
            case "î":
                $nouvelleChaine .= "1";
                break;
            case "o":
            case "ô":
                $nouvelleChaine .= "0";
                break;
            default:
                $nouvelleChaine .= $caractere;
        }
    }

    echo "La chaine '$message', lorsque traduite, donne '$nouvelleChaine'<br>";

     /*
    Refaire la même chose avec str_replace. 
    */

    ?>
    <h1>Version avec str_replace</h1>
    <?php 
    $message = "bonjour les amis";
    $message = mb_strtolower($message);
    /*
    //on appelle str_replace pour chaque caractère
    $nouvelleChaine = str_replace("a", 4, $message);
    echo $nouvelleChaine . "<br>";
    $nouvelleChaine = str_replace("e", 3, $nouvelleChaine);
    echo $nouvelleChaine;

    //c'est long... 
    */

    //version avec str_replace utilisant les tableaux
    $caracteresARemplacer = ["a", "à", "â", "e", "é", "è", "ê", "i", "î", "o", "ô"];
    $remplacements = [4, 4, 4, 3, 3, 3, 3, 1, 1, 0, 0];

    $nouvelleChaine = str_replace($caracteresARemplacer, $remplacements, $message);
    echo $nouvelleChaine;

    ?>
    <h1>Exercice 2 : Le palindrome (façon mathématique)</h1>
    <?php 
    $chaineOriginale = "Esope reste la et se repose";

    //première étape - on va tout mettre en minuscules
    $chaine = strtolower($chaineOriginale);
    //deuxième étape - on enlève les espaces
    $chaine = str_replace(" ", "", $chaine);

    //version sans accents
    $longueurChaine = strlen($chaine);
    $isPalindrome = true;

    for($i = 0; $i < $longueurChaine / 2; $i++)
    {
        //on compare le caractère à la position 0 avec le caractère à la dernière position, le caractère à la position 1 avec le caractère à l'avant-dernière position, etc.
        $lettreDebut = $chaine[$i];
        $lettreFin = $chaine[$longueurChaine - $i - 1];
        echo "$lettreDebut : $lettreFin<br>";
        
        if($lettreDebut != $lettreFin)
        {
            $isPalindrome = false;
            break;
        }
    }

    if($isPalindrome)
        echo "La chaine '$chaineOriginale' est un palindrome.<br>";
    else
        echo "La chaine '$chaineOriginale' n'est pas un palindrome.<br>";

    ?>
    <h1>Exercice 2 : Le palindrome (en utilisant les fonctions PHP de façon optimale)</h1>
    <?php 
    
    $chaineOriginale = "Esope reste ici et se repose";

    //première étape - on va tout mettre en minuscules
    $chaine = strtolower($chaineOriginale);
    //deuxième étape - on enlève les espaces
    $chaine = str_replace(" ", "", $chaine);

    //troisième étape, on renverse la chaine
    $chaineRenverse = strrev($chaine);

    //est-ce que la chaine sans espaces, sans majuscules, lorsque renversée, est identique
    if($chaineRenverse == $chaine)
    {
        echo "La chaine '$chaineOriginale' est un palindrome.<br>";
    }
    else
    {
        echo "La chaine '$chaineOriginale' n'est pas un palindrome.<br>";
    }
    ?>
    <h1>Exercice 3 : La recherche de majuscule</h1>
    <?php 

    /*

    Faites un programme qui s'assure qu'il y a absolument une majuscule dans une chaine nommée $chaineTest. Vous pourriez faire cette validation avec substr, strlen, strpos, etc…

    Indice : Il pourrait être utile de vous déclarer une chaine de caractères contenant toutes les lettres en majuscule.
    */
    $majuscules = "AÀÂBCDEÉÈÊFGHIÎJKLMNOÔPQRSTUÛÙVWXYZ";

    $chaineTest = "ceci est UN test";

    $aMajuscule = false;
    //boucler à travers tous les caractères de la chaine chaineTest et les chercher dans la chaine majuscules - si on le trouve, on a une majuscule et on arrête 
    for($i = 0; $i < mb_strlen($chaineTest); $i++)
    {
        $carac = mb_substr($chaineTest, $i, 1);
        $position = mb_strpos($majuscules, $carac);

        if($position !== false)
        {
            $aMajuscule = true;
            break;
        }
    }   

    if($aMajuscule)
        echo "La chaine contient une majuscule.<br>";
    else 
        echo "La chaine ne contient pas de majuscules.<br>";

    ?>
    <h1>La recherche de voyelles</h1>
    <?php 
    /*
    Exercice 4 : Les voyelles

    En utilisant les fonctions que vous voulez, comptez le nombre de voyelles et de consonnes qui se trouvent dans un mot contenu dans la variable $leMot.

    Exemples de fonctions qui pourraient être utiles : substr, strlen… ou une autre que je vous laisser trouver!

    Indice : Il pourrait vous être utile de vous déclarer une chaine de caractères contenant toutes les voyelles.
    */
    $chaineOriginale = "Guillaume est le professeur";
    $voyelles = "aàâeéèiîoôuûy";
    $nbVoyelles = 0;

    //enlever les espaces
    $chaine = str_replace(" ", "", $chaineOriginale);
    $chaine = mb_strtolower($chaine);

    //boucler à travers les caractères et compter les voyelles
    for($i = 0; $i < mb_strlen($chaine); $i++)
    {
        //on va chercher le caractère courant 
        $caractere = mb_substr($chaine, $i, 1);

        //est-ce que ce caractère se trouve dans la chaine $voyelles?
        $position = mb_strpos($voyelles, $caractere);

        //si on trouve, c'est une voyelle, sinon c'est une consonne (on prend pour acquis qu'il n'y a pas de ponctuation ou de caractères spéciaux)
        if($position !== false)
        {
            $nbVoyelles++;
        }
    }

    echo "La chaine '$chaineOriginale' contient $nbVoyelles voyelles.<br>";
    $nbConsonnes = mb_strlen($chaine) - $nbVoyelles;

    echo "La chaine '$chaineOriginale' contient $nbConsonnes consonnes.";

?>
</body>
</html>