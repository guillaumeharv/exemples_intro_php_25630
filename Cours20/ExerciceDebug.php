<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //voici la liste des étudiants d'un programme, et à quel cours ils sont inscrits
    //la clé est le numéro d'étudiant (e101)
    //la valeur est un tableau contenant le prénom, le nom, et un tableau d'inscriptions!
    $lesEtudiants = array(
        "e101" => array(
            "prenom" => "Martin", 
            "nom" => "Tremblay", 
            "inscriptions" => ["PHP", "Environnement"]
        ),
        "e102" => array(
            "prenom" => "Julia", 
            "nom" => "Hernandez", 
            "inscriptions" => ["PHP", "HTML", "Environnement"]
        ),
        "e103" => array(
            "prenom" => "Marcos", 
            "nom" => "Sanchez", 
            "inscriptions" => ["PHP", "HTML"]
        )
    );

    //pour chaque étudiant, on doit afficher son prénom, son nom, les cours auxquels ils sont inscrits, et déterminer et afficher si les étudiants sont à temps plein ou pas
    //règle d'affaire  : les étudiants sont à temps plein s'ils sont inscrits à 2 cours ou plus

    //print_r($lesInscriptions);

    //boucle pour traverser les inscriptions
    foreach($lesEtudiants as $num => $etudiant)
    {
        //affichage du numéro d'étudiant
        echo "Étudiant #" . $etudiant;

        //on commence la liste des attributs de l'étudiant
        echo "<ul>";
        //affichage du nom complet
        echo "<li>Nom complet : " . $etudiant[prenom]  . $etudiant[nom] . "</li>";

        
        //on affiche les cours de l'étudiant et on compte le nombre de cours auxquels il est inscrit
        $nombreCours = 0;
        echo "<li>Cours inscrits : ";
        foreach($etudiant["inscription"] as $cours)
        {
            echo $cours . " ";
            $nombreCours++;
        }
        echo "</li>";
 

        //si le nombre de cours est plus grand que 2
        if($nombreCours >= 2)
        {
            $status = "Temps complet";
        }
        else
        {
            $status = "Temps partiel";
        }

        echo "<li>Status : $status</li>";
    }
    ?>
</body>
</html>