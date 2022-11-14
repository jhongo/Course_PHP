<?php

    // Metodos estaticos se pueden llamar sin tener una instancia

    class UnaClase{

        public static function unMetodoStatic(){
            echo "Estoy ejecutando un metodo static";
        }
        
    }

    
    $obj = new UnaClase();
    $obj->unMetodoStatic();

    UnaClase::unMetodoStatic(); //Accedemos a ese metodo estatico
    



?>