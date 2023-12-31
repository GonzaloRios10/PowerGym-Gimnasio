<?php

include("../conexion.php");

if(isset($_POST['Enviar'])) {
	$nom = $_POST['Nombre'];
	$email = $_POST['Correo'];
	$telefono = $_POST['Celular'];
	$asun = $_POST['Asunto'];
	$desc = $_POST['Descripcion'];

	$consulta = "INSERT INTO mensaje_contacto(NombreCompleto, Correo, Celular, Asunto, Descripcion) VALUES ('$nom', '$email', '$telefono', '$asun', '$desc')";

	$resultado = mysqli_query($conex, $consulta);

	echo "<script> window.location = 'contactanos.php' </script>";
}

?>