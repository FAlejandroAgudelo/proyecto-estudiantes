<?php

include 'conexion.php';
$con = conexion();

        if (isset($_POST['register'])) {
            if(
                strlen($_POST['name']) >= 1 &&
                isset($_POST['document']) >= 1 &&
                strlen($_POST['email']) >= 1 &&
                strlen($_POST['direccion']) >= 1 &&
                strlen($_POST['phone']) >= 1 &&
                strlen($_POST['clave']) >= 1
            ){
                $name = trim($_POST['name']);
                $document = trim($_POST['document']);
                $email = trim($_POST['email']);
                $direccion = trim($_POST['direccion']);
                $phone = trim($_POST['phone']);
                $clave = trim($_POST['clave']);
                $fecha = date("d/m/y");
        
                $consulta = "INSERT INTO datos(idpersonal,nombre,email,direccion,celular,contrasena,fecha,documento)
                
                VALUES(default,'$name','$email','$direccion','$phone','$clave','$fecha','$document')";
        
                $resultado = pg_query($con, $consulta);
                
                if ($resultado){
                    ?>
                    <h3 class="success">Tu registro se a completado</h3>
                   <?php
                }else{
                    ?>
                    <h3 class="error">Ocurrio un error</h3>
                   <?php
                }
                }
        }

?>