<?php
include '../conexion.php';
if (isset($_POST['Enviar']))
{
    $id = $_POST['id'];    
    $musculo = $_POST['Musculo'];
    $nombre_eje = $_POST['ejercicio'];
    $descripcion = $_POST['descripcion'];
    $calo_quemadas = $_POST['calo_quemadas'];

    if (!empty($_FILES['imagen']['tmp_name'])) {
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $update = "UPDATE ejercicios 
        SET Nombre_eje = '$nombre_eje', grupo_muscular_idGrupo_Muscular = '$musculo', descripcion_eje = '$descripcion', calorias_quemadas = '$calo_quemadas', imagen = '$imagen' 
        WHERE idEjercicios = '$id';";
    } else {
        $update = "UPDATE ejercicios 
        SET Nombre_eje = '$nombre_eje', grupo_muscular_idGrupo_Muscular = '$musculo', descripcion_eje = '$descripcion', calorias_quemadas = '$calo_quemadas' 
        WHERE idEjercicios = '$id';";
    }
    
    $query = mysqli_query($conex, $update);
    
    if ($query) {
        header('Location: crear_ejercicios.php');
        exit();
    } else {
        echo "error";
    }
} 
?>