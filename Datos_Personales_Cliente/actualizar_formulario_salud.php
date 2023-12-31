<?php
    session_start();

        $consulta = mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario = '".$_SESSION['UsuarioClien']."'");

        $resultado = mysqli_fetch_array($consulta);

        $idusuario = $resultado['idusuario'];

        if (isset($_POST['txt_lesion_osea']) and $_POST['sel_lesion_osea'] == 1){
            $txt_lesion_osea=$_POST['txt_lesion_osea'];
        }else {$txt_lesion_osea = "NO";}

        if (isset($_POST['txt_lesion_muscular']) and $_POST['sel_lesion_muscular'] == 1){
            $txt_lesion_muscular=$_POST['txt_lesion_muscular'];
        }else {$txt_lesion_muscular = "NO";}

        if (isset($_POST['txt_cardio']) and $_POST['sel_cardio'] == 1){
            $txt_cardio=$_POST['txt_cardio'];
        }else {$txt_cardio = "NO";}

        if (isset($_POST['txt_anemia']) and $_POST['sel_anemia'] == 1){
            $txt_anemia=$_POST['txt_anemia'];
        }else {$txt_anemia = "NO";}

        $txt_anemia=(isset($_POST['txt_anemia']))?$_POST['txt_anemia']:"NO";
        $txt_asfixia=(isset($_POST['txt_asfixia']))?$_POST['txt_asfixia']:"NO";
        $txt_inscripto=(isset($_POST['txt_inscripto']))?$_POST['txt_inscripto']:"NO";
        $checkbox1=(isset($_POST['enfermedad']))?$_POST['enfermedad']:"NO";
        $checkbox2=(isset($_POST['sintoma']))?$_POST['sintoma']:"NO"; 
        $txt_peso=(isset($_POST['txt_peso']))?$_POST['txt_peso']:"NO";
        $txt_altura=(isset($_POST['txt_altura']))?$_POST['txt_altura']:"NO";
    
        $enviar=(isset($_POST['Enviar']))?$_POST['Enviar']:"";

        switch($enviar){
            case "Enviar":
                $chk1="";  
                if ($checkbox1){
                    foreach($checkbox1 as $enfermedad)  
                    { 

                        $chk1 .= $enfermedad.",";
                    }
                }
                $chk2="";  
                if ($checkbox2){
                    foreach($checkbox2 as $sintoma)  
                    {  
                    $chk2 .= $sintoma.",";
                    }
                }

                $sql = $conexion->prepare("INSERT INTO `ficha_medica`(`respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta5`, `respuesta6`, `Respuesta_Chek1`, `respuesta_Chek2`, `Peso`, `Altura`, `Fecha_Fmedica`, `usuario_idusuario` ) VALUES (:lesion_osea, :lesion_muscular, :cardio, :anemia, :asfixia, :inscripto, :enfermedad, :sintoma, :peso, :altura,NOW(), :usuario )");

            
                $sql->bindParam(':lesion_osea',$txt_lesion_osea);
                $sql->bindParam(':lesion_muscular',$txt_lesion_muscular);
                $sql->bindParam(':cardio',$txt_cardio);
                $sql->bindParam(':anemia',$txt_anemia);
                $sql->bindParam(':asfixia',$txt_asfixia);
                $sql->bindParam(':inscripto',$txt_inscripto);
                $sql->bindParam(':enfermedad',$chk1);
                $sql->bindParam(':sintoma',$chk2);               
                $sql->bindParam(':peso',$txt_peso);
                $sql->bindParam(':altura',$txt_altura);
                $sql->bindParam(':usuario',$idusuario);
                        
                $sql->execute();

                break;

            case "Modificar":
                $chk1="";  
                if ($checkbox1){
                    foreach($checkbox1 as $enfermedad)  
                    { 

                        $chk1 .= $enfermedad.",";
                    }
                }
                $chk2="";  
                if ($checkbox2){
                    foreach($checkbox2 as $sintoma)  
                    {  
                    $chk2 .= $sintoma.",";
                    }
                }

                $sql = $conexion->prepare("UPDATE ficha_medica SET respuesta1 = :lesion_osea, respuesta2 = :lesion_muscular, respuesta3 = :cardio, respuesta4 = :anemia, respuesta5 = :asfixia, respuesta6 = :inscripto, Respuesta_Chek1 = :enfermedad, respuesta_Chek2 = :sintoma, Peso = :peso,  Altura = :altura WHERE usuario_idusuario = ".$_SESSION['userid']);

                
                $sql->bindParam(':lesion_osea',$txt_lesion_osea);
                $sql->bindParam(':lesion_muscular',$txt_lesion_muscular);
                $sql->bindParam(':cardio',$txt_cardio);
                $sql->bindParam(':anemia',$txt_anemia);
                $sql->bindParam(':asfixia',$txt_asfixia);
                $sql->bindParam(':inscripto',$txt_inscripto);
                $sql->bindParam(':enfermedad',$chk1);
                $sql->bindParam(':sintoma',$chk2);               
                $sql->bindParam(':peso',$txt_peso);
                $sql->bindParam(':altura',$txt_altura);           
                $sql->execute();

                break;
        }
?>