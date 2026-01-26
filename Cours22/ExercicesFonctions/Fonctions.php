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

    //Exercice 5 : 

    /*
    *   Fonction moyenneTableau
    *       Description :
    *           Calcule la moyenne des entiers compris dans le tableau.
    *       Paramètres :
    *           $tabNombres : tableau d'entiers
            Valeur de retour :
                float, la moyenne des entiers dans le tableau
    */

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

    //Faire une version fonction (et non procédure) 
    //qui construit et RETOURNE la chaine contenant la table
    //plutôt que de l'afficher. 
    //Documentez-là!


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

    //Exercice 9

     /*
        Faire une fonction CalculeBillets qui reçoit en paramètres un montant d'argent en nombre de dollars et qui vous retourne une chaine de caractères expliquant la division optimale du montant en billets de 10 dollars, de 5 dollars, de 2 dollars et de 1 dollar.
        
        Ex : 
        
        CalculeBillets(23) retournerait la chaine suivante :
        "2 billets de 10 dollars, 1 billet de 2 dollars et 1 billet de 1 dollar."
        
        Vous aurez besoin d'une fonction qui calcule la valeur entière d'un nombre... Elle s'appelle intval(), voir sur php.net.
        
        Documentez-là!
    
    */
?>