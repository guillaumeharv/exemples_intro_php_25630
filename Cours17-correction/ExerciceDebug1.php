<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La table des nombres pairs et impairs entre 1 et 100, inclusivement</h1>
    <table>
        <tr><th>Nombre</th><th>Pair ou impair</th></tr>
    <?php 
    $nombre = 1;
    //5. condition de sortie de la boucle n'est pas bonne, puisqu'on arrête AVANT 100
    while($nombre <= 100)
    {
        $impairOuPair = "impair";
        if($nombre % 2 == 0) //6. il faut enlever le point-virgule ici
        {
            $impairOuPair = "pair";
        }
        
        //var_dump($impairOuPair); //utilisation de var_dump pour déterminer la valeur de impairOuPair sans l'ombre d'un doute
        //3. structure du html déficiente ici
        //4. utilisation de nombre plutôt que $nombre
        echo "<tr><td>$nombre</td><td>$impairOuPair</td></tr>"; //1. ajout du point-virgule pour l'erreur de syntaxe
        //2. ajout du compteur pour se rapprocher de la sortie de la boucle
        $nombre++;
    }
    ?>
    </table>
</body>
</html>