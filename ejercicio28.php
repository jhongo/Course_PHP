<?php

    $server="localhost";
    $user="root";
    $password="";
    $port="3307";

    try {
        $connection = new PDO("mysql:host=$server:3307; dbname=album",$user,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $sql="SELECT * FROM `fotos`";
        $sentencia=$connection->prepare($sql);
        $sentencia->execute();

        $resultado=$sentencia->fetchAll();

        // print_r($resultado);
        foreach ($resultado as $foto) {
          // echo $resultado[$i]."<br/>";
          print_r($foto['nombre']);
        }

        echo "Successful connection";
    } catch (PDOException $error) {
        
        echo "Failed connection ".$error;

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SQL</title>
</head>
<body>

<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="ejercicio27.php" >
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nombre Imagen
      </label>
      <input name="txtNameImg" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Ruta
      </label>
      <input name="txtNameRouteImg" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="route" type="text" placeholder="Ruta">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>
  </form>
</div>
    
</body>
</html>