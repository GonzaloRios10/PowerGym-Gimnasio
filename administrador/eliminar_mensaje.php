<?php
include("../conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM mensaje_contacto WHERE idmensaje_contacto = $id";
$resultado = mysqli_query($conex, $sql);

if ($resultado) {
    echo "success"; // Envía una respuesta indicando que se eliminó con éxito
} else {
    echo "error"; // Envía una respuesta indicando que ocurrió un error
}
?>
