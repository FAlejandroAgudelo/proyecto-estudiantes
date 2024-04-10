<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto/estiloscss/style.css">
    <title>Registro</title>
</head>

<body>

        <header>
            <a href="login.php" class="titulo">App<span>Registro</span></a>
        </header>

    <form class="contenedor" autocomplete="on" method="post">

        <h2>Hola</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre Completo" required/>
            <img class="input-icon" src="images/name.svg" alt="Name Icon"/>
        </div>

        <div class="input-wrapper">
            <input type="number" name="document" placeholder="Documento" required/>
            <img class="input-icon" src="images/documento.svg" alt="CC Icon"/>
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email" required/>
            <img class="input-icon" src="images/email.svg" alt="Email Icon"/>
        </div>

        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Direccion" required/>
            <img class="input-icon" src="images/direction.svg" alt="direccion Icon"/>
        </div>

        <div class="input-wrapper">
            <input type="number" name="phone" placeholder="Telefono" required/>
            <img class="input-icon" src="images/phone.svg" alt="phone Icon"/>
        </div>

        <div class="input-wrapper">
            <input type="password" name="clave" placeholder="Contraseña" required/>
            <img class="input-icon" src="images/password.svg" alt="password Icon"/>
        </div>

        <input class="btn" type="submit" name="register" value="Registrarme"/>

    </form>

    <?php
        include 'registrar.php';
    ?>

    
    
</body>
</html>