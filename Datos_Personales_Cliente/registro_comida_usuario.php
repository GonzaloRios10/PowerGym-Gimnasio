<?php

include("../conexion.php");

session_start(); 

$session_usuario = $_SESSION['UsuarioClien'];
$consulta = mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario = '".$session_usuario."'");
$resultado = mysqli_fetch_array($consulta);
$id_user = $resultado['idusuario'];

if(isset($_POST['Enviar'])) {
	if(isset($_POST['gramos'])){

		$gramos = $_POST['gramos'];
		$fecha = $_POST['fecha_usuario'];
		$comidas_id = $_POST['Comidas'];
		
		$consulta = "INSERT INTO alimentos_usuario(Cantidad_Gramos, Fecha, alimentos_idalimentos, usuario_idusuario) VALUES ('$gramos', '$fecha', '$comidas_id', '$id_user')";

		$resultado = mysqli_query($conex, $consulta);

		if($resultado){
			echo "<script> alert('Se ha registrado con exito'); window.location = '../Datos_Personales_Cliente/formulario_comida.php' </script>";
		}else{
			echo "<script> alert('No se pudo registrar'); window.location = '../Datos_Personales_Cliente/formulario_comida.php' </script>";
		}
		
	} else {
		echo "<script> alert('Complete los campos!'); window.location = '../Datos_Personales_Cliente/formulario_comida.php' </script>";
	}
}

?>