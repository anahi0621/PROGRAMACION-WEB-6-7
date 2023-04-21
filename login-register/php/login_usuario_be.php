<?php

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO  usuarios(correo, contrasena) 
vALUES('$correo','$contrasena')";

$validas_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'
and contrasena = '$contrasena'");

if(mysqli_num_rows($validas_login) > 0){
     //header("location: ../informacion.php");

     require 'informacion.php';
   exit;

}else {
    echo '
    <script>
    alert("Usuario o contraseña son incorrectas, por favor verifique los datos introducidos");
    window.location = "../index.php";
    </script>
    ';
    exit;
}


?>