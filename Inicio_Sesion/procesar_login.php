<?php
include("../conexion.php");

session_start();

if (!empty($_POST['btningresar'])) {
	if (!empty($_POST['usuario']) && !empty($_POST['clave'])){
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['clave'];

		$validar = mysqli_query($conex, "SELECT * FROM usuario WHERE Usuario = '".$usuario."'");

		$resultado = mysqli_fetch_array($validar);

		// echo "<script> alert('".$contrasena . "')</script>";

		if($resultado != null) {
			$passwordAlmacenada = $resultado['Password']; //password sin encriptar en bd
			$passwordEncriptada = $resultado['Password']; //password encriptada en bd

			if (password_verify($contrasena, $passwordEncriptada) || $contrasena == $passwordAlmacenada) {
				if ($resultado['Rol_idRol'] == 1) {
					$_SESSION['UsuarioClien'] = $usuario;
					header("Location: ../menu/menu_cliente.php");
				} else if ($resultado['Rol_idRol'] == 2) {
					$_SESSION['UsuarioProfesor'] = $usuario;
					header("Location: ../menu/menu_profesor.php"); 
				} else if ($resultado['Rol_idRol'] == 3){
					$_SESSION['UsuarioAdmin'] = $usuario;
					header("Location: ../menu/menu_administrador.php"); 
				}
			} else {
				// Contraseña incorrecta
				echo "<script> alert('Su contraseña es incorrecta'); window.location = 'login.php' </script>";
			}
		} else {
			// Usuario no encontrado
			echo "<script> alert('El usuario no existe'); window.location = 'login.php' </script>";
		}
	} else {
		// Campos vacíos
		echo "<script> alert('Ingresa todos los campos!'); window.location = 'login.php' </script>";
	}
}

?>
