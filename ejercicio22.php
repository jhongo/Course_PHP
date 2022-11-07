<?php


if ($_POST) {

    $newName=$_POST["txtName"];

    function AddNames($newStudent)
    {
        
        $names = array("Josue","John", "Miranda");
        array_push($names,$newStudent);

        foreach ($names as $index => &$name) {

            echo $names[$index]."<br/>";

        }
        if ($newStudent == "Gabriela") {
            echo "Grupo correcto";
        }else{
            echo "Grupo incorrecto";
        }

        
    }

    AddNames($newName);



}


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <form action="ejercicio22.php" method="post">

        <label for="">Ingresa nombre </label>
        <input type="text" name="txtName" id="">
        <input type="submit" value="Agregar">


    </form>


    
</body>
</html>