<?php

    if ($_POST) {
        $nombre=$_POST['txtNombre'];
        echo "Hola ".$nombre;
    }

    // Recibir informacion de FORM HTML METODO:POST

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<h3>Hello World</h3>

<form action="ejercicio2.php" method="post">
    <label for="">Nombre</label>
    <input type="text" name="txtNombre" id="">
    <br/>
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>