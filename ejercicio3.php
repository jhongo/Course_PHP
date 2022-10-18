<?php

    if ($_GET) {
        $nombre = $_GET['txtNombre'];

        echo "Hola ".$nombre;
    }else if($_GET) {
        echo "Hola Anonimo";
    }

?>