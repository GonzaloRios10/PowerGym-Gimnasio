<?php 
// session_start necesario de implementacion 
 // se guarda el id del usuario y se pone despues del where 
include'../conexion.php';
if(isset($_POST['Completado'])){
    $sql="UPDATE gym_mini.rutina SET estado_rutina = '2' where usuario_idusuario = '2'";
    $query=mysqli_query($conex,$sql);
    header('Location: ver_rutina.php'); 
    }
?>