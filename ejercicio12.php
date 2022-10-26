<?php

    if ($_POST) {
            
        $btnPress = $_POST['btnValor'];

        switch ($btnPress) {
            case 1:
                echo "Opcion 1";
                break;
            case 2:
                    
                echo "Opcion 2";
                break;
            
            case 3:
                echo "Opcion 3";
                break;
            
            default:
                echo "No presiono ninguna de las opcionez";
                break;
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
<title>Switch</title>
</head>
<body>

<div class="w-full max-w-xs">
    <form action="ejercicio12.php" method="post"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="btnValor" type="submit" value="1" >
          1
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="btnValor" type="submit" value="2" >
          2
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="btnValor" type="submit" value="3" >
          3
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="btnValor" type="submit" >
          OTRO
        </button>
      </div>
    </form>
  </div>



</body>
</html>