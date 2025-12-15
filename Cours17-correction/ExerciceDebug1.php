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
    while($nombre < 100)
    {
        $impairOuPair = "impair";
        if($nombre % 2 == 0);
        {
            $impairOuPair = "pair";
        }
        
        echo "<tr><td>nombre</tr><td>$impairOuPair</tr></td>"
    }
    ?>
    </table>
</body>
</html>