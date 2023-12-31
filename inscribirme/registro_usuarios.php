<?php
	include("../conexion.php");

if(isset($_POST['Enviar'])) {
	if(!empty($_POST['Usuario'])){
		$nom = $_POST['Nombre'];
		$ape = $_POST['Apellido'];
		$dni = $_POST['Documento'];
		$celular = $_POST['Telefono'];
		$email = $_POST['Correo'];
		$direccion = $_POST['Domicilio'];
		$user = $_POST['Usuario'];
		$password = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT);
		$rol = 1;
		$fechaNac = $_POST['FechaNacimiento'];
		$estado_civil = $_POST['EstadoCivil'];
		$localidad = $_POST['LocalidadProvincia'];
		$fecha_inscripcion = date('Y-m-d');
		$sexo = $_POST['Sexo'];

		$user_exist = $conex->query("SELECT * FROM usuario WHERE Usuario = '$user'");

		if(mysqli_num_rows($user_exist) > 0){
			echo "<script> alert('Usuario Existente'); window.location = 'formulario.php' </script>";
		}else{
			$consulta = "INSERT INTO usuario(Nombre, Apellido, DNI, Celular, Email, Domicilio, Usuario, Password, Rol_idRol, Fecha_nacimiento, EstadoCivil_idEstadoCivil, Localidad_idLocalidad, Fecha_inscripcion, genero_idgenero) VALUES ('$nom', '$ape', '$dni', '$celular', '$email', '$direccion', '$user', '$password', '$rol', '$fechaNac', '$estado_civil' ,'$localidad', '$fecha_inscripcion', '$sexo')";

			$resultado = mysqli_query($conex, $consulta);

			if($resultado){
				echo "<script> alert('Se ha registrado con exito'); window.location = '../Inicio_Sesion/login.php' </script>";
			}else{
				echo "<script> alert('No se pudo registrar'); window.location = 'formulario.php' </script>";
			}
		}
	} else {
		echo "<script> alert('Complete los campos!'); window.location = 'formulario.php' </script>";
	}
}

?>