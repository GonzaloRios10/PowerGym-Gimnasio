<?php

include("../conexion.php");

$id = $_POST['id'];
$nom = $_POST['Nombre'];
$ape = $_POST['Apellido'];
$dni = $_POST['Documento'];
$celular = $_POST['Telefono'];
$email = $_POST['Correo'];
$direccion = $_POST['Domicilio'];
$fechaNac = $_POST['FechaNacimiento'];
$estado_civil = $_POST['EstadoCivil'];
$localidad = $_POST['LocalidadProvincia'];
$sexo = $_POST['Sexo'];

$actualizar = "UPDATE usuario SET Nombre='$nom', Apellido='$ape', DNI='$dni', Celular='$celular', Email='$email', Domicilio='$direccion', Fecha_nacimiento='$fechaNac', EstadoCivil_idEstadoCivil='$estado_civil', Localidad_idLocalidad='$localidad', genero_idgenero='$sexo' WHERE idusuario = '$id'";

$resultado = mysqli_query($conex, $actualizar);

echo "<script> alert('Se han actualizado los datos con exito'); window.location = 'datos_personales_cliente.php' </script>";

?>