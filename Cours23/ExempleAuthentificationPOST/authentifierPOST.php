<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //vérifier que le username et le password sont la bonne combinaison
    if($_POST["user"] == "admin" && $_POST["pwd"] == "12345")
    {
        echo "Vous êtes authentifiés.";
    }
    else 
    {
        echo "Mauvaise combinaison username/password.";
    }
    ?>
</body>
</html>