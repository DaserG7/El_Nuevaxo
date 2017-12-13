<?php
session_start();
require_once("conexion.php");

$Nombre = $_POST['username'];
$Contraseña = $_POST['password'];
 
$sql = "SELECT * FROM Usuarios WHERE Nombre = '$Nombre' and Contraseña = '$contraseña'";

$result = $conexion->query($sql);


if (mysqli_num_rows($result)) {     
 
echo "<script>window.open('index.html')</script>"
    $_SESSION['nombre']=$Nombre;
 } else { 
   echo "<script>alert('Usuario y Contraseña incorrectos')</script>";

   echo "<br><a href='login.html','_self'>Volver a Intentarlo</a>";
 }
 
 ?>