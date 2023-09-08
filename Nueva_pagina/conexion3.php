<?php


include 'conexion.php'; 


$correo = $_POST['correo'];
$contrasena =$_POST['contrasena'];

$login = mysqli_query($enlace, "select correo,contrasena from iniciar WHERE correo = '$correo' and contrasena = '$contrasena'");
while(list($correo,$pwdx ) = mysqli_fetch_array($login) )


    if($correo == $correo && $contrasena == $pwdx){
         header("location:pasteles.php");
     
     }

 else{
    echo ' <script> alert("Este usuario no esta registrado");
    window.location = "registro.php";
            </script> ';

exit;
}
 
?>