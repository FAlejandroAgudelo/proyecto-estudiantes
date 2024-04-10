<?php

require 'conexion.php';
$conexion = conexion();
session_start();
$usuario = $_POST['email'];
$clave = $_POST['pass'];

$query = "SELECT * FROM  datos WHERE email= '$usuario' AND contrasena = '$clave' ";

$consulta = pg_query($conexion, $query);
// pg_close();

$cantidad = pg_num_rows($consulta);

if ($cantidad >0) {

    $_SESSION['nombre_usuario'] = $usuario;
    header( "Location: ingreso.php" );
    } else{
        echo "Datos incorrectos!";
}

?>