<?php
        if (isset($_POST['Enviar'])) {
            include '../conexion.php';
            $musculo = $_POST['musculo'];
           $id=$_POST['id'];
           echo $musculo;
           echo $id;
            // Preparar la consulta SQL de actualización
            $sql = "UPDATE grupo_muscular SET Musculo = '$musculo' WHERE idGrupo_Muscular = '$id'";
            $query = mysqli_query($conex, $sql);

            // Verificar el resultado de la consulta
            if ($query) {
                
              header('Location: crear_musculo.php ');
            
            } else {
                echo "Error en la consulta: " . mysqli_error($conex);
            }
        }
        ?>