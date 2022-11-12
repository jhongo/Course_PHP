<?php
// La premisa de la POO es que todo debe de ser tratado como un objeto
// HERENCIA podemos construir una clase a partir de otra 



class person{

    //Propiedades
    public $nombre; 
    private $edad;
    private $altura;

    //Metodo o acciones
    public function AddName($newName) 
    {
        $this->nombre=$newName;
    }

    public function ImprimirName()
    {
        echo "Hola ". $this->nombre."<br/>";
    }

    public function getAge()
    {
        $this->edad=22;
        return $this->edad;
    }

}

class trabajador extends person
{
    public $puesto; //Propiedad nueva

    public function presentarTrabajador()
    {
        echo "Hola soy ".$this->nombre. "y mi cargo es de ".$this->puesto;
    }
}





// INSTANCIOS DE LAS CLASES

$objTrabajador = new trabajador();
$objTrabajador->AddName("John");
  
$objTrabajador->puesto="Profesor";
$objTrabajador->presentarTrabajador();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERENCIA</title>
</head>
<body>
    
</body>
</html>