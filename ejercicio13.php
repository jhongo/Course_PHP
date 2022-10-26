<?php

    if ($_POST) {
        
        $limite = $_POST['numLimite'];

        for ($i=0; $i < $limite; $i++) { 
            echo $i."<br/>";
    
        } 

    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo FOR</title>
</head>
<body>

    <form method="post" action="ejecicio13.php">
    <input type="number" name="numLimite" id="">
    <input type="submit" value="Enviar">
    </form>
    
</body>
</html>