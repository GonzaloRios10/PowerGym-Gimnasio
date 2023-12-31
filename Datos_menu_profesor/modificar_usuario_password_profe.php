<?php

include("../conexion.php");

$id = $_POST['id'];
$usuario = $_POST['user'];
$pass = $_POST['password'];

$actualizar = "UPDATE usuario SET Usuario='$usuario', Password='$pass' WHERE idusuario = '$id'";

$resultado = mysqli_query($conex, $actualizar);

echo "<script> alert('Se han actualizado los datos con exito'); window.location = '../Inicio_Sesion/login.php' </script>";

?>