<?php
// La premisa de la POO es que todo debe de ser tratado como un objeto


class person{

    public $nombre; //Propiedad
    private $edad;
    private $altura;

    public function AddName($newName) //Metodo o acciones
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

$objAlumno = new person(); //El objeto no es mas que la instancia de una clase
$objAlumno->AddName("John"); //Llamando un metodo
$objAlumno->ImprimirName();

echo $objAlumno->nombre."<br/>"; //Imprimir una propiedad

$objAlumno2 = New person();
$objAlumno2->AddName("Carlos");

echo $objAlumno2->nombre."<br/>";
echo $objAlumno2->getAge();



?>