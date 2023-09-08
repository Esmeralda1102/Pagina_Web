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
    <link rel="stylesheet" href="registro.css">
    <title></title>
</head>
<body>
    <header class="menu">

            <div class="logo">

                <a href="index.html"><img src="logo1.png" width="80px" height="80px" margin="0spx"></a>

            </div>

            <nav class="menu1">

                <a href="index.php">Inicio</a>
                <a href="nosotros.php">Nosotros</a>
                <a href="pasteles.php">Pasteles</a>
                <a href="contacto.php">Contacto</a>
            

            </nav>

        
</header>

        <main class="otro"></main>

        <div class="contenedor-formulario contenedor">
            <div class="imagen-formulario">
    
            </div>
            <form class="formulario" action="conexion2.php" method="POST">
                <div class="texto-formulario">
                    <h2>Registrate</h2>
                </div>
                <div class="input">
                    <label for="usuario">Nombre Completo</label>
                    <input type="text" id="nombre" placeholder="Nombre Completo" name="nombre" required>
                </div>
                <div class="input">
                    <label for="contraseña">Correo Electronico</label>
                    <input type="email" id="correo" placeholder="Correo Electronico" name="correo" required>
                </div>
                <div class="input">
                    <label for="Fecha">Fecha De Nacimiento</label>
                    <input type="date" id="contraseña" name="fecha_nac" required>
                </div>
                <div class="input">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                </div>
                <div class="input">
                    <input type="submit" value="Enviar">
                </div>
                <div class="registrate">
                    <a href="login.php">¿Ya tienes una cuenta? Inicia Sesion</a>
                </div>
            </form>
        </div>

        
    </main>


</body>
</html>