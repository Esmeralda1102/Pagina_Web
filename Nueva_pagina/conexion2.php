<?php

include 'conexion.php';

$nombre = $_POST["nombre"] ;
$fecha_nac = $_POST["fecha_nac"] ;
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"] ;

$query = "INSERT INTO iniciar(nombre_completo,fecha_nac,correo,contrasena)
        VALUES('$nombre', '$fecha_nac', '$correo', '$contrasena')";

$ejecutar = mysqli_query($enlace, $query);

if($ejecutar)
{
    echo ' <script> alert("Usuario registrado exictosamente");
    window.location = "registro.php";
            </script> ';
}



?>