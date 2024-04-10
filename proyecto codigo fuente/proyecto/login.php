<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto/estiloscss/style.css">
    <title>Login</title>
</head>

<body>

        <header>
        <h1 class="titulo">App<span>Registro</span></h1>
        </header>

<form class="contenedor" action="./sesion.php" method="post">

        <h2>Hola</h2>
        <p>Ingrea a nuestro portal estudiantil</p>

        <div class="input-wrapper">
        <input type="email" name="email" placeholder="Ingrese su email" required/>
        </div>

        <div class="input-wrapper">
        <input type="password" name="pass" placeholder="Ingrese su contraseña" required/>
        </div>

        <input class="btn" type="submit" name="envio" value="Enviar" /> <br>

        <h5>Si no estas registrado</h5>

        <div>
            <a class="r btn" href="index.php">REGISTRATE</a>
        </div>

    </form>

        
    
</body>
</html>