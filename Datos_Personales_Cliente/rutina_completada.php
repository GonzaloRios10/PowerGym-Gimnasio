<?php 
session_start();
 // se guarda el id del usuario y se pone despues del where 
include'../conexion.php';
if(isset($_POST['Completado'])){
    $sql="UPDATE rutina SET estado_rutina = '2' where usuario_idusuario = '". $_SESSION['idUsuario'] ."'";
    $query=mysqli_query($conex,$sql);
    header('Location: ver_rutina.php'); 
    }
?>