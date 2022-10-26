<?php

    if ($_POST) {
        
        $multiplicador = $_POST['multiplicador'];
        $multiplicado = $_POST['multiplicado'];

        for ($i=0; $i <= $multiplicado; $i++) { 

            $resp = $i * $multiplicador;
            echo $i. "*".$multiplicador."=".$resp."<br/>";
    
        } 

    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ciclo FOR</title>
</head>
<body>

<div class="w-full max-w-xs">
    <form action="ejercicio13.php" method="post"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Tabla del
        </label>
        <input name="multiplicador" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Imprimir hasta
        </label>
        <input name="multiplicado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Enviar" >
          Calcular
        </button>
      </div>
    </form>
  </div>
    
</body>
</html>