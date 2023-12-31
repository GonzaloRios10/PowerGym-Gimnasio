<?php
include '../conexion.php';

if (isset($_POST['Enviar'])) {
    $nombre_eje = $_POST['nombre_eje'];
    $descripcion_eje = $_POST['descripcion_eje'];
    $grupo_musc = $_POST['Musculo'];
    $calo_quemadas = $_POST['calo_quemadas'];

    // Verificar si se envió una imagen
    if (!empty($_FILES['imagen']['tmp_name'])) {
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $insert = "INSERT INTO ejercicios (Nombre_eje, descripcion_eje, grupo_muscular_idGrupo_Muscular, calorias_quemadas, imagen) 
                   VALUES ('$nombre_eje', '$descripcion_eje', '$grupo_musc', '$calo_quemadas', '$imagen')";
    } else {
        $insert = "INSERT INTO ejercicios (Nombre_eje, descripcion_eje, grupo_muscular_idGrupo_Muscular, calorias_quemadas) 
                   VALUES ('$nombre_eje', '$descripcion_eje', '$grupo_musc', '$calo_quemadas')";
    }

    $insertar = mysqli_query($conex, $insert);

    if ($insertar) {
        header('Location: crear_ejercicios.php');
        exit(); // Agregamos exit() para asegurarnos de que el script se detenga después de la redirección
    } else {
        echo "no se inserto";
    }
}
?>
