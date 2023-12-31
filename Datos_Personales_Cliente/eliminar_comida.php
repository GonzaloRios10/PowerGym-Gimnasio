<?php

include("../conexion.php");

$id = $_GET['id'];

$sql1 = "DELETE FROM alimentos_usuario WHERE alimentos_idalimentos = $id ";
$resultado1 = mysqli_query($conex, $sql1);

$sql2 = "DELETE FROM alimentos WHERE idalimentos = $id";
$resultado2 = mysqli_query($conex, $sql2);

if ($resultado1 && $resultado2) {
    echo "success"; // Envía una respuesta indicando que se eliminó con éxito
} else {
    echo "error"; // Envía una respuesta indicando que ocurrió un error
}
?>
