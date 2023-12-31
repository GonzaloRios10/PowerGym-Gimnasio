<?php
include'../conexion.php';
$id=$_POST['id'];
$sql="DELETE FROM grupo_muscular WHERE (idGrupo_Muscular = '$id')"; 
$query=mysqli_query($conex,$sql);
header('Location: crear_musculo.php ')
?>