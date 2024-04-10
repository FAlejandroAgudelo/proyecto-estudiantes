<?php

function conexion(){

    $host = "host=localhost";
    $port = "port=5432";
    $dbname = "dbname=dbphp";
    $user = "user=postgres";
    $password = "password=password";

     $conex = pg_connect("$host $port $dbname $user $password");

    return $conex;

}

?>