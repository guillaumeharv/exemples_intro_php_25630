<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //avec les doubles guillemets, il faut échapper les doubles guillemets à l'intérieur
    $chaine = "Guillaume c'est le professeur et il vous dit \"Allo!\".\n";
    echo $chaine;

    echo "<br>\n";

    //avec les simples guillemets comme délimiteurs, il faut échapper le simple guillemet à l'intérieur
    $chaine2 = 'Guillaume c\'est le professeur et il vous dit "Allo!".';
    echo $chaine2;
    echo "<br>\n";


    //dans le cas où vous voudriez afficher des tags html plutôt que les insérer directement dans le HTML...
    //$chaineContenantHTML = "Je voudrais écrire un texte qui parle des paragraphes <p> en HTML.";

    $chaineContenantHTML = "Je voudrais écrire un texte qui parle des paragraphes &lt;p&gt; en HTML.";
    echo $chaineContenantHTML;
    ?>
</body>
</html>