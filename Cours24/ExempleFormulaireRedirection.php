<?php 
    $messageErreur = "";
    $codePostal = "";

    if(isset($_POST["codePostal"]))
    {
        $codePostal = $_POST["codePostal"];
        //valider que le code postal commence par H 
        if(substr($_POST["codePostal"], 0, 1) == "H")
        {
            //code postal valide, on redirige vers la page avec le message de validation
            header("Location: CodePostalValide.html");
            die();
        }
        else 
        {
            $messageErreur = "Le code postal doit commencer par H.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Entrez votre code postal : <input type="text" name="codePostal" value="<?=  $codePostal ?>">
        <input type="submit" value="Valider">
    </form>
    <?php 
        if($messageErreur != "")
            echo "<p>$messageErreur</p>";
    ?>
</body>
</html>