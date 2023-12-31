<?php

include("../conexion.php");

session_start(); 

//clave temporal
$longitudPass = 4;
$mipassword = substr(md5(microtime()), 1, $longitudPass);
$clave_temporal = $mipassword;

$correo = trim($_REQUEST['correo_electronico']); //se quita los espacios en blanco
$sql = "SELECT * FROM usuario WHERE Email = '".$correo."' ";
$resultado = mysqli_query($conex, $sql);
$cant_filas = mysqli_num_rows($resultado);

if ($cant_filas == 0) {
	header('location:login.php');
} else {
	// $clave_encriptada = password_hash($clave_temporal, PASSWORD_DEFAULT);
	$updateClave = "UPDATE usuario SET Password = '$clave_temporal' WHERE email = '".$correo."' ";
	$resultado = mysqli_query($conex, $updateClave);

	$_SESSION['correo_electronico'] = $correo; //guardo el correo del usuario en una session

	header('location:email_recuperacion.php');
}

?>