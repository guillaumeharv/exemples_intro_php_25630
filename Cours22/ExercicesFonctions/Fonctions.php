<?php 
    //C'est dans ce fichier que vous allez définir les fonctions à développer en exercices
    
    //Exercice 1 : La factorielle
    //Faire une fonction qui calcule la factorielle d'un nombre envoyé en paramètres 
    //Documentez-là et fournissez un exemple d'utilisation dans le programme principal. 
    /*
    *   Fonction factorielle
    *       Description : Calcule la factorielle d'un nombre envoyé en paramètres.
            Paramètres :
                $nombre, nombre dont on veut calculer la factorielle, entier
            Valeur de retour : 
                entier, le résultat du calcul de la factorielle de $nombre selon la règle 
                    Ex : factorielle de 5 est 1 x 2 x 3 x 4 x 5
    */

    function factorielle($nombre)
    {
        $fact = 1;

        for($i = 1; $i <= $nombre; $i++)
        {
            //$fact = $fact * $i;
            $fact *= $i; //équivalent
        }

        return $fact;
    }

    //Exercice 2

    //Faire une fonction qui reçoit en paramètres un TABLEAU et qui construit une chaine (pas ECHO, construction de chaine avec .= ) qui contiendra une table HTML à deux colonnes. La première colonne contiendra l'index (numérique ou associatif) et la seconde colonne contiendra la valeur, pour chacune des cases dans le tableau.
    //Documentez-la et testez-la dans un programme principal.

    /*
    *   Fonction construitTableHTML
    *       Description : Construit une table HTML représentant le contenu d'un tableau à index associatif ou numérique. La première colonne contient l'index et la seconde contient la valeur à cet index.
            Paramètres :
                $leTableau, tableau contenant des valeurs
            Valeur de retour : 
               $chaine, chaine contenant le HTML généré, une table HTML représentant le contenu du tableau
    */
    function construitTableHTML($leTableau)
    {
        //on traite tout simplement la variable envoyée en paramètres comme un tableau
        $chaine = "<table border='1'>";
        //$chaine = $chaine . "<tr><th>Index</th><th>Valeur</th></tr>"
        $chaine .= "<tr><th>Index</th><th>Valeur</th></tr>";

        //pour chaque item dans notre tableau, on génère une nouvelle rangée dans la table HTML
        foreach($leTableau as $cle => $valeur)
        {
            $chaine .= "<tr><td>$cle</td><td>$valeur</td></tr>";           
        }
        
        $chaine .= "</table>"; 
        return $chaine;
    }


    //Exercice 3

    //Faites une fonction qui détermine si une phrase est un palindrome. Un palindrome est une phrase qui lorsque renversée, donne la même phrase.
    //ex : Esope reste ici et se repose, Laval
    //Documentez-là!

    /*
    *   Fonction estPalindrome
    *       Description : Détermine si une chaine envoyée en paramètres est un palindrome ou non. Un palindrome est une phrase qui lorsque      renversée, donne la même phrase.
            //ex : Esope reste ici et se repose, Laval

            Paramètres :
                $chaine, la chaine à tester
            Valeur de retour : 
               true si la chaine envoyée en paramètres est un palindrome, false sinon
    */

    function estPalindrome($chaineOriginale)
    {
        //première étape - on va tout mettre en minuscules
        $chaine = strtolower($chaineOriginale);
        //deuxième étape - on enlève les espaces
        $chaine = str_replace(" ", "", $chaine);

        //troisième étape, on renverse la chaine
        $chaineRenverse = strrev($chaine);

        //est-ce que la chaine sans espaces, sans majuscules, lorsque renversée, est identique
        if($chaineRenverse == $chaine)
        {
            return true;
        }
        else
        {
            return false;
        }
    } 
    
     
    //Exercice 4

    /*
    *   Fonction SommeIntervalle
    *       Description : 
                Calcule et retourne la somme des entiers contenus entre deux entiers envoyés en paramètres. 
            Paramètres :
                $nombre1, $nombre2 : entier, les deux nombres délimitant la somme à calculer
            Valeur de retour :
                entier, la somme des entiers contenus entre deux entiers envoyés en paramètres.

          Ex : SommeIntervalle(3, 6) retournera (3 + 4 + 5 + 6) = 18
    */

    function sommeIntervalle($nombre1, $nombre2)
    {
        $somme = 0;

        //renverser les deux nombres s'ils ne sont pas dans le bon ordre
        if($nombre1 > $nombre2)
        {
            $tampon = $nombre1;
            $nombre1 = $nombre2;
            $nombre2 = $tampon;
        }

        //calcule la somme des nombres entre $nombre1 et $nombre2
        for($i = $nombre1; $i <= $nombre2; $i++)
        {
            $somme += $i;
        }

        return $somme;
    }




    //Exercice 5 : 

    /*
    *   Fonction moyenneTableau
    *       Description :
    *           Calcule la moyenne des entiers compris dans le tableau.
    *       Paramètres :
    *           $tabNombres : tableau d'entiers
            Valeur de retour :
                float, la moyenne des entiers dans le tableau

                NB. On prend pour acquis que le tableau contient seulement des nombres.
    */

    function moyenneTableau($tab) 
    {
        if(count($tab) == 0)
            return 0;

        $somme = 0;
        foreach($tab as $n)
        {
            $somme += $n;
        }

        //la moyenne est la somme divisée par le nombre d'éléments
        return $somme / count($tab);
    }            

    //Exercice 6 : Rédigez cette procédure et cette fonction.

    /*
    *
    *   Procédure tableMultiplication
    *       Description : AFFICHE la table de multiplication du nombre envoyé en paramètre
            Paramètres :
                $nb : entier dont on veut afficher la table de multiplication.
            Valeur de retour :
                Aucune
    *
    */

    function tableMultiplication($nb)
    {
        echo "<ul>";
        for($i = 1; $i <= 12; $i++)
        {
            $resultat = $nb * $i;
            echo "<li>$i x $nb = $resultat</li>";
        }
        echo "</ul>";
    }

    //Faire une version fonction (et non procédure) 
    //qui construit et RETOURNE la chaine contenant la table
    //plutôt que de l'afficher. 
    //Documentez-là!

    /*
    *
    *   Fonction construitTableMultiplication
    *       Description : Construit la table de multiplication du nombre envoyé en paramètre et la retourne
            Paramètres :
                $nb : entier dont on veut afficher la table de multiplication.
            Valeur de retour :
                $chaine : une chaine de caractères contenant la liste ul et les li représentant une table de multiplication du nombre envoyé en paramètres
    *
    */

    function construitTableMultiplication($nb)
    {
        $chaine = "<ul>";
        for($i = 1; $i <= 12; $i++)
        {
            $resultat = $nb * $i;
            $chaine .= "<li>$i x $nb = $resultat</li>";
        }
        $chaine .= "</ul>";

        return $chaine;
    }
    //Exercice 8

    /*
    *
    *   Fonction prixAffiches
    *       Description :
    *           Calcule le prix total pour l'impression des affiches selon un nombre d'affiches envoyé en paramètres.
    *           Les règles sont les suivantes : 
                20 dollars pour chacune des 5 premières affiches,  
                10 dollars pour chacune des 20 suivantes et 7 dollars pour chacune des affiches supplémentaires. 
    *       Paramètres :
    *           $nbAffiches : entier, le nombre d'affiches à imprimer
    *       Valeur de retour :
                entier, prix total pour le nombre d'affiches envoyé en paramètres
    */

    function prixAffiches($nbAffiches)
    {
        if($nbAffiches <= 5)
            $prixTotal = $nbAffiches * 20;
        else if($nbAffiches <= 25)
            $prixTotal = 100 + ($nbAffiches - 5) * 10;
        else 
            $prixTotal = 300 + ($nbAffiches - 25) * 7;

        return $prixTotal;
    }

    //Exercice 9

     /*
        Faire une fonction CalculeBillets qui reçoit en paramètres un montant d'argent en nombre de dollars et qui vous retourne une chaine de caractères expliquant la division optimale du montant en billets de 10 dollars, de 5 dollars, de 2 dollars et de 1 dollar.
        
        Ex : 
        
        CalculeBillets(23) retournerait la chaine suivante :
        "2 billets de 10 dollars, 1 billet de 2 dollars et 1 billet de 1 dollar."
        
        Vous aurez besoin d'une fonction qui calcule la valeur entière d'un nombre... Elle s'appelle intval(), voir sur php.net.
        
        Documentez-là!
    
    */
    function calculeBillets($montant)
    {
        //initialisation du nombre de billets à 0
        $nbBillets10 = 0;
        $nbBillets5 = 0;
        $nbBillets2 = 0;
        $nbBillets1 = 0;

        //on prend la valeur entière de la division du montant par 10
        $nbBillets10 = intval($montant / 10);
        $reste = $montant % 10;

        if($reste > 0)
        {
            //on prend la valeur entière de la division du montant par 5
            $nbBillets5 = intval($reste / 5);
            $reste = $reste % 5;

            if($reste > 0)
            {
                //on prend la valeur entière de la division du montant par 2
                $nbBillets2 = intval($reste / 2);
                //s'il reste un dollar à distribuer, on donne un billet de 1
                $nbBillets1 = $reste % 2;
            }
        }

        return "$nbBillets10 billets de 10 dollars, $nbBillets5 billets de 5 dollars, $nbBillets2 billets de 2 dollars et $nbBillets1 billet de 1 dollar.";
        
    }
?>