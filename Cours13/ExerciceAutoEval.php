<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
<?php 
    $prenom = "Guillaume";
    $nom = "Harvey";
    $noteEnPhp = 8;
    $noteVisee = 10;
?>
<h1>Auto-évaluation de <?= "$prenom $nom" ?></h1>
<table>
    <tr>
        <th>Note en PHP</th>
        <th>Note à atteindre</th>
        <th>Effort à fournir</th>
    </tr>
    <tr>
        <td><?= $noteEnPhp ?></td>
        <td><?= $noteVisee ?></td>
        <td><?= $noteVisee - $noteEnPhp ?></td>
    </tr>
</table>
</body>
</html>