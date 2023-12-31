<?php
include'../conexion.php';
  $id=$_GET["id"];
    $sql="DELETE FROM ejerciciosrutina
WHERE rutina_idRutina = '$id';";
$query=mysqli_query($conex,$sql);
if ($query) {
    header('Location: listar_rutinas.php');
  } else {
    echo "No anduvo";}









?>