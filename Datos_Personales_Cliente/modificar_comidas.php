<?php

include("../conexion.php");

session_start();

$session_usuario = $_SESSION['UsuarioClien'];
$consulta = mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario = '".$session_usuario."'");
$resultado = mysqli_fetch_array($consulta);
$id_user = $resultado['idusuario'];

$id = $_POST['id'];
$nombre = $_POST['nom_comida'];
$calorias = $_POST['calorias'];
$grasas = $_POST['grasas'];
$hidratos = $_POST['hidratos'];
$proteinas = $_POST['proteinas'];

$actualizar = "UPDATE alimentos SET Nombre='$nombre', Calorias='$calorias', Grasas='$grasas', Hidratos='$hidratos', Proteinas='$proteinas' WHERE idalimentos = '$id'";

$resultado = mysqli_query($conex, $actualizar);

echo "<script> alert('Se han actualizado los datos con exito'); window.location = 'planilla_comidas_tabla.php' </script>";

?>