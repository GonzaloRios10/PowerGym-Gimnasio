<?php 
    include("../conexion.php"); 
?>	
<!DOCTYPE html>
<html>
  <head>
    <?php
        include('./head.php');
    ?>
      <link rel="stylesheet" href="./tabla.css">
  </head>
  <body>
    
   
    
    <!--navbar-->
    <?php
        include('../menu/navbar_cliente.php');
    
    ?>
    
      
      
      <!--                                                        Main                                -->
    
    <section class="section main-clientes">

          
            <div class="container " style=" border: solid 3px white;;margin-top:80px;">
                <div >
                    <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                 
                </div>

                <div class="field primero  ">
                    <?php
                        $session_usuario = $_SESSION['UsuarioClien'];
                        $query_user= mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario ='".$session_usuario."'" );
                        $userid=mysqli_fetch_row($query_user);
                        $consulta = mysqli_query($conex, "SELECT * FROM ficha_medica WHERE usuario_idusuario =".$userid[0] );                        
                        $resultado = mysqli_fetch_array($consulta);
                        
                        if ($resultado) {
                            $_SESSION['userid'] = $userid[0];
                        }

                        ?> 



                    <h2 class="info" >Informe de Salud</h2><br>
                    <div class="table-container animated zoomIn">
                        <table  class="table is-fullwidth " style="border-radius: 20px;">
                            <thead>
                                <tr >
                                <th style="text-align: center;">Lesión Muscular</th>
                                <th style="text-align: center;">Anemia</th>
                                <th style="text-align: center;">Inscripto otro gym o Deporte</th>
                                <th style="text-align: center;">¿Es Usted?</th>
                                <th style="text-align: center;">Peso</th>
                                <th style="text-align: center;">Altura</th>
                                <th style="text-align: center;">Masa Corporal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  >
                                    <td data-cell="Lesión Muscular" style="text-align: center;"><?php echo ($resultado['respuesta2'] == NULL ? "NO": $resultado['respuesta2']) ?></td>
                                    <td data-cell="Anemia" style="text-align: center;"><?php echo ($resultado['respuesta4'] == NULL ? "NO": $resultado['respuesta4']) ?></td>
                                    <td data-cell="Inscrito otro gym o Deporte" style="text-align: center;"><?php echo ( $resultado['respuesta6'] == 1 ? "SI": "NO") ?></td>
                                    <td data-cell="¿Es Usted?" style="text-align: center;">
                                    <?php
                                        $rta_chk = str_split($resultado['Respuesta_Chek1']);
                                        $enfermedades_alumno = "";
                                        foreach( $rta_chk as $chk_enfermedad){
                                            switch($chk_enfermedad){
                                                case "a":
                                                    $enfermedades_alumno = "Asmatico <br>";
                                                    break;
                                                case "b":
                                                    $enfermedades_alumno .= "Epileptico <br>";
                                                    break;
                                                case "c":
                                                    $enfermedades_alumno .= "Diabetico <br>";
                                                    break;
                                                case "d":
                                                    $enfermedades_alumno .= "Fumador <br>";
                                                    break;
                                                case "e": 
                                                    $enfermedades_alumno = "Ninguna";  
                                                    break;                                             
                                            }
                                        }
                                        echo $enfermedades_alumno;
                                    ?>

                                    </td>
                                    <?php $masa_corporal = $resultado['Peso'] / (($resultado['Altura']/100) * ($resultado['Altura']/100)) ; ?>;
                                    <td data-cell="Peso" style="text-align: center;"><?php echo $resultado['Peso'] . " Kgs" ?></td>
                                    <td data-cell="Altura" style="text-align: center;"><?php echo $resultado['Altura'] . " cms"?></td>
                                    <td data-cell="Masa" style="text-align: center;"><?php echo round($masa_corporal,2);  ?></td>
                                </tr>
             
                            </tbody>
                        
                        </table><br>
                
                    
                        <table  class="table is-fullwidth " style="border-radius: 20px;">
                            <thead>
                                <tr class="tr_font">
                                <th style="text-align: center;">Lesión Ósea</th>
                                <th style="text-align: center;">Asfixia</th>
                                <th style="text-align: center;">síntomas al realizar esfuerzos</th>
                                <th style="text-align: center;">Cardiovascular</th>
                                <th style="text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr  >
                                <td data-cell="Lesión Ósea" style="text-align: center;"><?php echo ($resultado['respuesta1'] == NULL ? "NO": $resultado['respuesta1']) ?></td>
                                <td data-cell="Afixia" style="text-align: center;"><?php echo ( $resultado['respuesta5'] == 1 ? "SI": "NO") ?></td>
                                <td data-cell="síntomas al realizar esfuerzos" style="text-align: center;">
                                <?php
                                        $rta_chk2 = str_split($resultado['respuesta_Chek2']);
                                        $sintomas_alumno = "";
                                        foreach( $rta_chk2 as $chk_sintomas){
                                            switch($chk_sintomas){
                                                case "a":
                                                    $sintomas_alumno = "Mareos <br>";
                                                    break;
                                                case "b":
                                                    $sintomas_alumno .= "Desmayos <br>";
                                                    break;
                                                case "c":
                                                    $sintomas_alumno .= "Nauseas <br>";
                                                    break;
                                                case "d":
                                                    $sintomas_alumno .= "Respiracion <br>";
                                                    break;
                                                case "e": 
                                                    $enfermedades_alumno = "Ninguna";  
                                                    break;                                             
                                            }
                                        }
                                        echo $sintomas_alumno;
                                    ?>
                                </td>
                                <td data-cell="Cardiovascular" style="text-align: center;"><?php echo ($resultado['respuesta3'] == NULL ? "NO": $resultado['respuesta3']) ?></td>
                                <td data-cell="Acciones" style="text-align: center;">
                          
                                        <a class="button  is-warning  is-rounded is-small"  href="./modificar_formulario_salud.php" >
                                        <span style="color:black;" >Modificar</span>
                                        </a>
                              
                                
                                </td>    
                            </tr>
            
                        </tbody>
                        </table><br>
           
             
                    
                </div>


            </div>


    </section>
    <hr class="shadow">
    <footer class="footer">
        <?php
            include('../footer/footer.php')
        ?>
        </footer> 
  </body>
</html>