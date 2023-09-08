<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login2.css">
    <title>Iniciar sesion</title>
</head>
<body>
    <header class="menu">


            <div class="logo">

                <a href="Index.php"><img src="logo1.png" width="80px" height="80px"></a>

            </div>

            <nav class="menu1">

                <a href="Index.php">Inicio</a>
                <a href="nosotro.php">Nosotros</a>
                <a href="pasteles.php">Pasteles</a>
                <a href="contacto.php">Contacto</a>

            </nav>

        
</header>
        <main class="otro"></main>

        <div class="contenedor-formulario contenedor">
            <div class="imagen-formulario">
    
            </div>
            <form class="formulario"  action="conexion3.php" method="POST">
                <div class="texto-formulario">
                    <h2>Bienvenido</h2>
                    <p>Inicia Sesion con tu cuenta</p>
                </div>
                <div class="input">
                    <label for="usuario">Correo</label>
                    <input type="text" id="usuario" placeholder="Usuario" name="correo">
                </div>
                <div class="input">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" id="contraseña" placeholder="Contraseña" name="contrasena">
                    
                </div>
                <div class="contraseña-olvidada">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="input">
                    <input type="submit" value="Enviar">
                </div>
                <div class="registrate">
                    <a href="registro.php">¿No tiene una cuenta? Registrate</a>
                </div>
            </form>
        </div>

    </main>
</body>
</html>