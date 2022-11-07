<?php

    // Esto permite tener en los arreglos indices no numericos
        $fruits=array("Fresa","Manzana","Pera");
        // print_r($fruits);

    // echo $fruits[2];
    

    echo "Mapear con FOR".  "<br/>";
    // Mapear Array por FOR
    for ($indice=0; $indice < 3; $indice++) {
        
        print_r($fruits[$indice]."<br/>");
    }
    
    echo "Mapear con FOREACH". "<br/>";
    
    // Mapear Array por FOREACH
    foreach ($fruits as $indice => &$fruit) {
        
        // echo $indice." => ".$fruit."<br/>";
        echo $fruits[$indice]."<br/>";
        
    
    }




?>