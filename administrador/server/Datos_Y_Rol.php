<?php
    $data = str_replace('\\', '', $_POST['data']);// reemplaza todas las barras invertidas \ en la cadena con una cadena vacía ''
	$data = json_decode(utf8_encode($data), true); //convierte la cadena JSON en un array asociativo de PHP. 
    switch($data['accion']){    
        case "cargarTablaCliente":
			echo json_encode(cargarTablaCliente( $data ));
        break;

        case "cargarTablaProfesores":
			echo json_encode(cargarTablaProfesor( $data ));
        break;

        case "cargarTablaAdmin":
			echo json_encode(cargarTablaAdmin( $data ));
        break;

        case "SelectRol":
			echo json_encode(cargarSelectRol( $data ));
        break;

        case "editarRol":
            echo json_encode(editarRol( $data ));
        break; 

        case "eliminarUsuario":
            echo json_encode(eliminarUsuario( $data ));
        break;      
    }


function cargarTablaCliente($data){
    require("conexion.php");
    $sql = "SELECT * FROM usuario u
        INNER JOIN localidad l ON l.idLocalidad = u.Localidad_idLocalidad
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

function cargarTablaAdmin($data){
    require("conexion.php");
    $sql = "SELECT * FROM usuario u
        INNER JOIN localidad l ON l.idLocalidad = u.Localidad_idLocalidad
        INNER JOIN rol ON rol.idRol = u.Rol_idRol
        WHERE Rol = 'Administrador'";
    $registros = mysqli_query($conex, $sql) or
        die("Problemas en el SELECT: ".mysqli_error($conex));

    $registros_ar = array();

    while($row = $registros->fetch_assoc()){
      $registros_ar[] = $row;
    }

    mysqli_close($conex);
    return $registros_ar;
}

function cargarTablaProfesor($data){
    require("conexion.php");
    $sql = "SELECT * FROM usuario u
        INNER JOIN localidad l ON l.idLocalidad = u.Localidad_idLocalidad
        WHERE Rol_idRol = 2";
    $registros = mysqli_query($conex, $sql) or
        die("Problemas en el SELECT: ".mysqli_error($conex));

    $registros_ar = array();

    while($row = $registros->fetch_assoc()){
      $registros_ar[] = $row;
    }

    mysqli_close($conex);
    return $registros_ar;
}

function cargarSelectRol($data){
    require("conexion.php");
    $sql = "SELECT * FROM rol";
        
    $registros = mysqli_query($conex, $sql) or
        die("Problemas en el SELECT: ".mysqli_error($conex));

    $registros_ar = array();

    while($row = $registros->fetch_assoc()){
      $registros_ar[] = $row;
    }

    mysqli_close($conex);
    return $registros_ar;
}

function editarRol($data){
    require("conexion.php");

    $sql = "UPDATE
        usuario
    SET
        Rol_idRol = '".$data['rol']."'  
    WHERE
        idusuario = '".$data['idUsuario']."'";

    $registros = mysqli_query($conex, $sql) or
        die("Problemas en editar Rol: ".mysqli_error($conex)); 
}

function eliminarUsuario($data){
    require("conexion.php");

    $SQL01 = "DELETE FROM 
                        ficha_medica
                    WHERE usuario_idusuario IN (
                    SELECT usuario_idusuario
                    FROM usuario
                    WHERE idusuario = '".$data['idusuario']."')";

    $registros = mysqli_query($conex, $SQL01) or
        die("Problemas SQL01: ".mysqli_error($conex));                

    $SQL02 = "DELETE FROM 
                            comidas_profesional
                        WHERE usuario_idusuario IN (
                        SELECT usuario_idusuario
                        FROM usuario
                        WHERE idusuario = '".$data['idusuario']."')";

    $registros = mysqli_query($conex, $SQL02) or
        die("Problemas SQL02: ".mysqli_error($conex));           

    $SQL03 = "DELETE FROM 
                            rutina
                        WHERE usuario_idusuario IN (
                        SELECT usuario_idusuario
                        FROM usuario
                        WHERE idusuario = '".$data['idusuario']."')";

    $registros = mysqli_query($conex, $SQL03) or
        die("Problemas SQL03: ".mysqli_error($conex));           

    $sql = "DELETE FROM usuario WHERE idusuario = '".$data['idusuario']."'";

    $registros = mysqli_query($conex, $sql) or
    die("Problemas en eliminar trabajo: ".mysqli_error($conex));        
    
    mysqli_close($conex);
    return $registros;
}
?>