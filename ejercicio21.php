<?php

    // Esto permite tener en los arreglos indices no numericos
        $fruits=array("Fresa","Manzana","Pera");
        // print_r($fruits);

    // echo $fruits[2];

    // Mapear Array por FOR
    for ($indice=0; $indice < 3; $indice++) {
        
        print_r($fruits[$indice]."<br/>");
    }

    // Mapear Array por FOREACH
    foreach ($fruits as $indice => &$fruit) {
        
        // echo $indice." => ".$fruit."<br/>";
        echo $fruits[$indice]."<br/>";
        
    
    }




?>