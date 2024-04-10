<?php

    session_start();
    $usuario = $_SESSION['nombre_usuario'];

    echo "<h1>Bienvenido estudiante</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto/estiloscss/stylee.css">
    <title>Registro</title>
</head>
<body>

    <fieldset>
        <legend>Formulario de Registro de Notas</legend>

        <form  method="post">
        
        <label for="carrera"> Selecciona la Carrera:</label>
        <select name="carrera" required>
            <option></option>
            <option value="Ing. en Sistemas">Ing. en Sistemas</option>
        </select>

        <br><br>

        <label for="materia"> Selecciona la materia:</label>
        <select name="materia" required>
            <option></option>
            <option value="Sistemas Operativos">Sistemas Operativos</option>
            <option value="Programacion III">Programación III</option>
            <option value="Programacion I">Programacion I</option>
        </select>

            <p>Nota 1: <input type="text" name="textN1" required></p>
            <p>Nota 2: <input type="text" name="textN2" required></p>
            <p>Nota 3: <input type="text" name="textN3" required></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        include 'notas.php';
?>

    </fieldset>

    <a  href="login.php">Salir</a>
    
</body>
</html>