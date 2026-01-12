<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //tableaux à index numérique - inadéquat pour représenter plusieurs informations relatives à un même concept parce que l'ordre des colonnes a soudainement une signification et elle doit être documentée ainsi :
    /*
        position 0 : prénom
        position 1 : nom
        position 2 : ville
        position 3 : âge
    */
    $individu1 = array("Guillaume", "Harvey", "Montréal", 44);
    //équivalent de
    //$individu1 = array(0 => "Guillaume", 1 => "Harvey", 2 => "Montréal", 3 => 44);

    $individu2 = array("Marc-André", "Charpentier", "Montréal", 42);
    ?>
    <pre>
        <?php 
        print_r($individu1);
        ?>
    </pre>
    <h1>Exemples de tableaux associatifs</h1>
    <?php 
    //version des individus en tableau associatif 
    $individu1 = array("prenom" => "Guillaume", "nom" => "Harvey", "ville" => "Montréal", "age" => 44);
    $individu2 = array("prenom" => "Marc-André", "nom" => "Charpentier", "ville" => "Montréal", "age" => 42);

    //ajout d'un numéro de téléphone sur le 2e individu 
    $individu2["tel"] = "514-333-3333";
    ?>
    <pre>
        <?php 
        print_r($individu1);
        print_r($individu2);
        ?>
    </pre>
    <table border="1">
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>
        <tr>
            <td><?= $individu1['prenom'] ?></td>
            <td><?= $individu1['nom'] ?></td>
            <td><?= $individu1['ville'] ?></td>
            <td><?= $individu1['age'] ?></td>
        </tr>
        <tr>
            <td><?= $individu2['prenom'] ?></td>
            <td><?= $individu2['nom'] ?></td>
            <td><?= $individu2['ville'] ?></td>
            <td><?= $individu2['age'] ?></td>
        </tr>
    </table>
    <h1>Utilisation du foreach</h1>
    <?php 
    //utilisation de la boucle foreach avec les tableaux associatifs

    //si j'ai seulement besoin des valeurs, je peux utiliser la boucle foreach comme nous l'avions vu précédemment
    echo "<ul>";
    foreach($individu1 as $attribut)
    {
        echo "<li>$attribut</li>";
    }
    echo "</ul>";


    //rappel de la structure 
    /*
    $individu1 = array(
        "prenom" => "Guillaume", 
        "nom" => "Harvey", 
        "ville" => "Montréal", 
        "age" => 44
    );
    */
    //si j'ai aussi besoin des indexs / clés, on va utiliser le couple clé => valeur
    echo "<ul>";
    foreach($individu1 as $c => $v)
    {
        echo "<li>$c : $v</li>";
    }
    echo "</ul>";
    ?>
    <h1>Exemples de tableaux multidimensionnels</h1>
    <?php 
    //chaque individu est un tableau
    $guillaume = array("prenom" => "Guillaume", "nom" => "Harvey", "ville" => "Montréal", "age" => 44);
    $marc = array("prenom" => "Marc-André", "nom" => "Charpentier", "ville" => "Montréal", "age" => 42, "numTel" => "514-333-3333");
    $valerie = array("prenom" => "Valérie", "nom" => "Tremblay", "ville" => "Montréal", "age" => 33);


    //voici un tableau à index numérique qui contient, à chaque position, un individu différent (qui est lui-même un tableau à index associatif)
    $individus = [$guillaume, $marc, $valerie];
    //une version à index associatif
    $individusAssoc = ["IndividuA" => $guillaume, "IndividuB" => $marc, "IndividuC" => $valerie];

    //pas besoin nécessairement de déclarer les tableaux à l'avance, on peut tout déclarer en même temps
    $individusToutEnMemeTemps = array(
        "IndividuA" => array(
            "prenom" => "Guillaume", 
            "nom" => "Harvey", 
            "ville" => "Montréal", 
            "age" => 44),
        "IndividuB" => array(
            "prenom" => "Marc-André", 
            "nom" => "Charpentier", 
            "ville" => "Montréal", 
            "age" => 42,
            "numTel" => "514-333-3333"
        ),
        "IndividuC" => array(
            "prenom" => "Valérie", 
            "nom" => "Tremblay", 
            "ville" => "Montréal", 
            "age" => 33)
    );
    ?>
    <pre>
        <?php 
        print_r($individus);
        print_r($individusAssoc);
        print_r($individusToutEnMemeTemps);
        ?>
    </pre>
    <h1>Exemple d'affichage de tous les individus (pas de boucle imbriquée)</h1>
    <table border="'1">
    <tr><th>Prenom</th><th>Nom</th><th>Âge</th><th>Ville</th></tr>
    <?php 
    //comment faire afficher toutes les caractéristiques de tous les individus dans ma liste d'individus? 
    //méthode lorsque je connais tous les attributs : pas besoin de boucle imbriquée
    foreach($individus as $i)
    {
        echo "<tr><td>" . $i['prenom'] . "</td>";
        echo "<td>" . $i['nom'] . "</td>";
        echo "<td>" . $i['age'] . "</td>";
        echo "<td>" . $i['ville'] . "</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <h1>Exemple d'affichage de tous les individus, et tous leurs attributs (avec boucle imbriquée)</h1>
    <?php 
    //comment faire afficher toutes les caractéristiques de tous les individus dans ma liste d'individus? 
    //méthode lorsque je ne connais pas tous les attributs : besoin d'une boucle imbriquée pour boucler à travers les attributs
    foreach($individus as $unIndividu)
    {
        echo "Nouvel individu : ";
        echo "<ul>";
        foreach($unIndividu as $attribut => $valeur)
        {
            echo "<li>$attribut : $valeur</li>";
        }
        echo "</ul>";
    }
    ?>
    </table>
    <h1>Version avec tableau associatif qui contient des tableaux associatifs</h1>
    <?php 
    //comment faire afficher toutes les caractéristiques de tous les individus dans ma liste d'individus? 
    //méthode lorsque je ne connais pas tous les attributs : besoin d'une boucle imbriquée pour boucler à travers les attributs
    foreach($individusAssoc as $identifiantIndividu => $unIndividu)
    {
        echo "Nouvel individu : $identifiantIndividu";
        echo "<ul>";
        foreach($unIndividu as $attribut => $valeur)
        {
            echo "<li>$attribut : $valeur</li>";
        }
        echo "</ul>";
    }
    ?>
    </table>
</body>
</html>