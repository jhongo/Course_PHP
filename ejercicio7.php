<?php

    if ($_POST) {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resSum = $num1+$num2;
        $resRest = $num1-$num2;
        $resMul = $num1*$num2;
        $resDiv = $num1/$num2;

        echo "<br/>"."La suma de ".$num1."+".$num2."=".$resSum. "\n";
        echo "<br/>"."La resta de ".$num1."-".$num2."=".$resRest;
        echo "<br/>"."La multiplicacion de ".$num1."*".$num2."=".$resMul;
        echo "<br/>"."La division de ".$num1."/".$num2."=".$resDiv;
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Operadores</title>
</head>
<body>

    <div class="w-full max-w-xs">
        <form action="ejercicio7.php" method="post"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Primer Valor
            </label>
            <input name="num1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Segundo Valor
            </label>
            <input name="num2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
          </div>
          <!-- <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
          </div> -->
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Enviar" >
              Calcular
            </button>
          </div>
        </form>
      </div>


    
</body>
</html>