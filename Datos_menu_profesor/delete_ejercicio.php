<?php
include'../conexion.php';
if (isset($_POST['enviar']))
{
    $id=$_POST['id'];
    $nroejer=trim($id);
    $sql="DELETE FROM ejercicios WHERE idEjercicios = " .$nroejer;
    $query = mysqli_query($conex,$sql);
    if ($query){header("Location: crear_ejercicios.php");}else{echo"Error " . $query . " " . $sql ;}
} 
?>