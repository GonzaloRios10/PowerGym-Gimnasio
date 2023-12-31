<?php
$data = str_replace('\\', '', $_POST['data']);// reemplaza todas las barras invertidas \ en la cadena con una cadena vacía ''
$data = json_decode(utf8_encode($data), true); //convierte la cadena JSON en un array asociativo de PHP. 
switch($data['accion']){    
    case "select_musculos":
        echo json_encode(selectMusculos( $data ));
    break;
    case "mySelect":
        echo json_encode(selectUsuario( $data ));
    break;
    case "selectEjercicios":
        echo json_encode(selectEjercicios( $data ));
    break;
    case "enviarEjercicio":
        echo json_encode(enviarEjercicio( $data ));
    break;
}

function selectMusculos($data){
    require("conexion.php");
    $sql = "SELECT * FROM grupo_muscular";
    $registros = mysqli_query($conex, $sql) or
        die("Problemas en el SELECT: ".mysqli_error($conex));

    $registros_ar = array();

    while($row = $registros->fetch_assoc()){
      $registros_ar[] = $row;
    }

    mysqli_close($conex);
    return $registros_ar;
}

function selectUsuario($data){
    require("conexion.php");
    $sql = "SELECT 
                idusuario, 
                Nombre, 
                Rol_idRol,
                Apellido 
            FROM usuario
            WHERE Rol_idRol = '1'";
    $registros = mysqli_query($conex, $sql) or
        die("Problemas en el SELECT: ".mysqli_error($conex));

    $registros_ar = array();

    while($row = $registros->fetch_assoc()){
      $registros_ar[] = $row;
    }
    mysqli_close($conex);
    return $registros_ar;
}

function selectEjercicios($data){
    require("conexion.php");

    $sql = "SELECT
                idEjercicios,
                Nombre_eje
            FROM ejercicios e
            INNER JOIN grupo_muscular g 
            ON g.idGrupo_Muscular = e.grupo_muscular_idGrupo_Muscular
            WHERE g.idGrupo_Muscular = '".$data['select_musculos']."'";

    $registros = mysqli_query($conex, $sql) or
        die("Problemas en el SELECT: ".mysqli_error($conex));

    $registros_ar = array();

    while($row = $registros->fetch_assoc()){
      $registros_ar[] = $row;
    }
    mysqli_close($conex);
    return $registros_ar;
}

function enviarEjercicio($data)
{
    require("conexion.php");
    if (!$conex) {
        die("Connection failed: " . mysqli_connect_error());
    }
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $arrayEjercicios = array();
    $fecha_ruti = date("Y-m-d");
    $idEjercicios= $data["selectMusculo"];
    $selectMusculo = $data["selectMusculo"];
    $idusuario = $data["idusuario"];
    $estado_rutina = 1;
    $arrayEjercicios = $data["arrayEjercicios"];

    $sql2 = "INSERT INTO rutina (fecha_ruti, usuario_idusuario, estado_rutina) VALUES ('$fecha_ruti', '$idusuario', '$estado_rutina')";
      
    if (($result = mysqli_query($conex, $sql2)) === false) {
        die(mysqli_error($conex));
    } 

    $sql1 = "SELECT MAX(idRutina) AS idRutina FROM rutina";
    $registros = mysqli_query($conex, $sql1);
    if ($row = mysqli_fetch_array($registros)) {
        $idEjerciciosRutina = $row['idRutina'];
    }

    for ($i=0; $i < count($arrayEjercicios); $i++) {         
        $Series = $arrayEjercicios[$i]['series'];
        $Repeticiones = $arrayEjercicios[$i]['repeticiones'];
        $idEjercicios = $arrayEjercicios[$i]['ejecicio'];
       
        $sql = "INSERT INTO ejerciciosrutina (Series, Repeticiones, ejercicios_idEjercicios, rutina_idRutina) VALUES ('$Series', '$Repeticiones', '$idEjercicios', '$idEjerciciosRutina')";
        if (($result = mysqli_query($conex, $sql)) === false) {
            die(mysqli_error($conex));
        } 
    }

    echo "Excelnete guardado correctamente.";
    mysqli_close($conex);
}

function editarTrabajo($data){
    require("conexion.php");

    $sql = "UPDATE
                trabajos
            SET
                servicio  = '".$data['servicio']."',
                precio     = '".$data['precio']."',
                tiempo     = '".$data['tiempo']."'
            WHERE
                id_trabajo = '".$data['id_trabajo']."'";

    $registros = mysqli_query($conn, $sql) or
    die("Problemas en editar trabajo: ".mysqli_error($conn));        
    
    mysqli_close($conn);
    return $registros;
}
?>