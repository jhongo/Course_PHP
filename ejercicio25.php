<?php
// La premisa de la POO es que todo debe de ser tratado como un objeto


class person{

    public $nombre; //Propiedad
    private $edad;
    private $altura;


    // Constructor
    function __construct($newName){
        $this->nombre= $newName;


    }


    public function AddName($newName) //Metodo o acciones
    {
        $this->nombre=$newName;
    }

    public function PrintName()
    {
        echo "Hola ". $this->nombre."<br/>";
    }

    public function getAge()
    {
        $this->edad=22;
        return $this->edad;
    }

}

$objAlumno = new person("John Carlos"); //El objeto no es mas que la instancia de una clase
// $objAlumno->AddName("John"); //Llamando un metodo AddName
$objAlumno->PrintName(); //Llamando al objeto imprimir nombre



?>