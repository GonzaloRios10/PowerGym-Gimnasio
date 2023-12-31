<?php

include("../conexion.php");

session_start(); 

$session_usuario = $_SESSION['UsuarioClien'];
$consulta = mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario = '".$session_usuario."'");
$resultado = mysqli_fetch_array($consulta);
$id_user = $resultado['idusuario'];

if(isset($_POST['Enviar'])) {
	if(isset($_POST['Nombre_Bebida'])){

		$bebida = $_POST['Nombre_Bebida'];
		$grasas = $_POST['Grasas_totales'];
		$hidratos = $_POST['Hidratos'];
		$calorias = $_POST['Calorias'];
		$proteinas = $_POST['Proteinas'];
		
		// $comida_exist = $conex->query("SELECT * FROM comidas WHERE Nombre_comidas = '$comida'");

		$consulta = "INSERT INTO alimentos(Nombre, Calorias, Hidratos, Proteinas, Grasas, usuario_idusuario, tipos_alimentos_idtipos_alimentos) VALUES ('$bebida', '$calorias', '$hidratos', '$proteinas', '$grasas', '$id_user', 2)";

		$resultado = mysqli_query($conex, $consulta);

		if($resultado){
			echo "<script> alert('Se ha registrado con exito'); window.location = '../Datos_Personales_Cliente/crear_alta_bebidas.php' </script>";
		}else{
			echo "<script> alert('No se pudo registrar'); window.location = '../Datos_Personales_Cliente/crear_alta_bebidas.php' </script>";
		}
		
	} else {
		echo "<script> alert('Complete los campos!'); window.location = '../Datos_Personales_Cliente/crear_alta_bebidas.php' </script>";
	}
}

?>