<?php

include("../conexion.php");

// Obtengo el id de la comida seleccionada
$idComidaSeleccionada = $_GET['idComida'];

// Consulta para obtener los valores de la tabla comidas
$consulta = "SELECT Calorias, Hidratos, Proteinas, Grasas FROM alimentos WHERE idalimentos = '$idComidaSeleccionada'";
$resultado = mysqli_query($conex, $consulta);
$fila = mysqli_fetch_assoc($resultado);

// Creo un array asociativo con los valores obtenidos de la BD
$valores = array(
    'calorias' => $fila['Calorias'],
    'hidratos' => $fila['Hidratos'],
    'proteinas' => $fila['Proteinas'],
    'grasas' => $fila['Grasas']
);

// Devuelvo los valores como respuesta JSON
echo json_encode($valores);

?>
