<?php

    $server="localhost";
    $user="root";
    $password="";
    $port="3307";

    try {
        $connection = new PDO("mysql:host=$server:3307; dbname=album",$user,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Successful connection";
    } catch (PDOException $error) {
        
        echo "Failed connection ".$error;

    }

?>