<?php 
    include("../conexion.php"); 
    include('actualizar_formulario_salud.php'); 
?>
<!DOCTYPE html>
<html>
 
    <head>
        <?php
            include('./head.php');
        ?>
    </head>
  
  <body>
    
   
    
    <!--navbar-->
    <?php
        include('../menu/navbar_cliente.php');
    
    ?>
    
      
      
      <!--                                                        Main                                -->
    
      <section class="section main-clientes" >
        <form action="" method="POST" enctype= "multipart/form-data" >
            <div class="container " style=" border: solid 3px white;;margin-top:80px;">
                <div class="buttons ">
                    <a name="Enviar" href="./Datos_Cuestionario_salud.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                </div>
                <h2 class="info" ><span ><u style="color:#f7f57d;"> Modificar</u> Cuestionario de Salud</span></h2><br>
                <div class="field primero  ">

                       
                    
                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                 
                        <?php
                        $session_usuario = $_SESSION['UsuarioClien'];
                        $query_user= mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario = '".$session_usuario."'" );
                        $userid=mysqli_fetch_row($query_user);
                        $consulta = mysqli_query($conex, "SELECT * FROM ficha_medica  WHERE usuario_idusuario = '".$userid[0]."'" );
                        $resultado = mysqli_fetch_array($consulta);
                        
                        if ($resultado) {
                            $_SESSION['userid'] = $userid[0];
                        }
                        ?> 							 																	 												  
                           <tbody>
                           <tr class="Personalestr">
                                <td class="Personales">
                                    
                                    <label class="label">¿Ha tenido o tiene alguna lesión ósea?</label>
                                    <div class="control" >
                                        <div class="select" >
                                            <select  name="sel_lesion_osea" id="lesion_osea" >
                                                <option hidden>Elija una opción</option>
                                                    <option value="1" <?php if (!empty($resultado)){ echo ( $resultado['respuesta1'] <> "NO" ? " selected" : "");} ?> >Si</option>
                                                    <option value="2" <?php if (!empty($resultado)){ echo ( $resultado['respuesta1'] == "NO" ? " selected" : "");} ?> >No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <div class="control">
                                            <input class="input is-rounded" type="text" <?php if (!empty($resultado)){ echo ( $resultado['respuesta1'] <> "NO" ? 'value= "' . $resultado['respuesta1'] . '"' : "disabled");} ?> name="txt_lesion_osea" id="txt_lesion_osea" required placeholder="Breve descripción"  >
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label"> ¿Ha tenido o tiene alguna lesión muscular?</label>
                                    <div class="control" >
                                        <div class="select" >
                                            <select  name="sel_lesion_muscular"  id="lesion_muscular">
                                                <option hidden>Elija una opción</option>
                                                <option value="1" <?php if (!empty($resultado)){ echo ( $resultado['respuesta2'] <> "NO" ? " selected" : "");} ?> >Si</option>
                                                <option value="2" <?php if (!empty($resultado)){ echo ( $resultado['respuesta2'] == "NO" ? " selected" : "NO");} ?> >No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <input class="input is-rounded" type="text" required <?php if (!empty($resultado)){ echo ( $resultado['respuesta2'] <> "NO" ? 'value= "' . $resultado['respuesta2'] . '"' : "disabled");} ?>  name="txt_lesion_muscular" txt_lesion_muscular" id="txt_lesion_muscular" required placeholder="Breve descripción"  >
                                    </div>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label"> ¿Padece alguna enfermedad cardiovascular?</label>
                                    <div class="control" >
                                        <div class="select" >
                                            <select  name="sel_cardio"  id="cardio" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" <?php if (!empty($resultado)){ echo ( $resultado['respuesta3'] <> "NO" ? " selected" : "");} ?> >Si</option>
                                                <option value="2" <?php if (!empty($resultado)){ echo ( $resultado['respuesta3'] == "NO" ? " selected" : "");} ?> >No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <input  <?php if (!empty($resultado)){ echo ( $resultado['respuesta3'] <> "NO" ? 'value= "' . $resultado['respuesta3'] . '"' : "disabled");} ?> name="txt_cardio" required  class="input is-rounded"  id="txt_cardio" type="text" placeholder="Breve descripción" >
                                    </div>
                                </td>                     
                                <td class="Personales">
                                    <label class="label"> ¿Padece de anemia en la actualidad?</label>
                                    <div class="control" >
                                        <div class="select" >
                                            <select  name="sel_anemia" id="anemia" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" <?php if (!empty($resultado)){ echo ( $resultado['respuesta4'] <> "NO" ? " selected" : "");} ?> >Si</option>
                                                <option value="2" <?php if (!empty($resultado)){ echo ( $resultado['respuesta4'] == "NO" ? " selected" : "");} ?> >No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <input   name="txt_anemia" required class="input is-rounded" <?php if (!empty($resultado)){ echo ( $resultado['respuesta4'] <> "NO" ? 'value= "' . $resultado['respuesta4'] . '"' : "disabled");} ?> id="txt_anemia"  type="text" placeholder="Breve descripción" >
                                    </div>
                                </td>
                                
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">¿Se asfixia con facilidad al realizar ejercicio físico?</label>
                                    <div class="control">
                                        <div class="select" >
                                                 <select  name="txt_asfixia" id="asfixia" >
                                                <option hidden>Elija una opción</option>
                                                <option value="SI" <?php if (!empty($resultado)){ echo ( $resultado['respuesta5'] <> "NO" ? " selected" : "");} ?> >Si</option>
                                                <option value="NO" <?php if (!empty($resultado)){ echo ( $resultado['respuesta5'] == "NO" ? " selected" : "");} ?> >No</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">¿Ha estado inscripto en algún gimnasio o instalación deportiva?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="txt_inscripto"  id="inscripto">
                                                <option hidden>Elija una opción</option>
                                                <option value="SI" <?php if (!empty($resultado)){ echo ( $resultado['respuesta6'] <> "NO" ? " selected" : "");} ?> >Si</option>
                                                <option value="NO" <?php if (!empty($resultado)){ echo ( $resultado['respuesta6'] == "NO" ? " selected" : "");} ?> >No</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Peso:</label>
                                    <div class="control">
                                        <input  required  class="input is-rounded" value = "<?php if (!empty($resultado)){ echo $resultado['Peso'];} ?>"  name="txt_peso" id="txt_peso" type="number"  placeholder="Ingrese el Peso" >
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Altura:</label>
                                    <div class="control">
                                        <input    class="input is-rounded" value = "<?php if (!empty($resultado)){ echo $resultado['Altura'];}  ?>" name="txt_altura" id="txt_altura"  type="number"  placeholder="Ingrese la Altura" >
                                    </div>
                                </td>
                            </tr>
                           </tbody>
                        </table>
                    </div>
                   <script type= "text/javascript">
                        $('#lesion_osea').change(function() {
                            if( $(this).val() == 1) {
                                $('#txt_lesion_osea').prop( "disabled", false );
                            } else {       
                                $('#txt_lesion_osea').prop( "disabled", true );
                                $('#txt_lesion_osea').val( '' );
                            }
                        });

                        $('#lesion_muscular').change(function() {
                            if( $(this).val() == 1) {
                                $('#txt_lesion_muscular').prop( "disabled", false );
                            } else {       
                                $('#txt_lesion_muscular').prop( "disabled", true );
                                $('#txt_lesion_muscular').val( '' );
                            }
                        });

                        $('#cardio').change(function() {
                            if( $(this).val() == 1) {
                                $('#txt_cardio').prop( "disabled", false );
                            } else {       
                                $('#txt_cardio').prop( "disabled", true );
                                $('#txt_cardio').val( '' );
                            }
                        });

                        $('#anemia').change(function() {
                            if( $(this).val() == 1) {
                                $('#txt_anemia').prop( "disabled", false );
                            } else {       
                                $('#txt_anemia').prop( "disabled", true );
                                $('#txt_anemia').val( '' );
                            }
                        });
                    </script>
                    <div class="table-container animated zoomIn ">
                        <table class="table is-fullwidth " style="border-radius:15px ;">
                            <thead>
                                <p class="parrafo" style="color:white">¿Es Usted?</p>
                            </thead>
                            <tbody >
								<?php 
                                    if (!empty($resultado)){
                                        $rta_chk = str_split($resultado['Respuesta_Chek1']);
                                        foreach( $rta_chk as $chk_enfermedad){
                                            switch($chk_enfermedad){
                                                case "a":
                                                    $asmatico = "checked";
                                                    break;
                                                case "b":
                                                    $epiletico = "checked";
                                                    break;
                                                case "c":
                                                    $diabetico = "checked";
                                                    break;
                                                case "d":
                                                    $fumador = "checked";
                                                    break;
                                                case "e": 
                                                    $ninguna = "checked";  
                                                    break;                                             
                                            }
                                        }
                                    }
                                ?>
                                <tr class="enfermedad">
                                    <td>
                                        <label class="label checkbox">
                                            <input type="checkbox" value="a" name="enfermedad[0]" <?php echo ( isset($asmatico) ? $asmatico : "");?>>
                                            Asmático/a
                                        </label>
                                    </td>

                                    <td>
                                        <label class="label checkbox">
                                           <input  type="checkbox" value="b" name="enfermedad[1]" <?php echo ( isset($epiletico) ? $epiletico : "");?>>
                                            Epiléptico/a
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                           <input  type="checkbox" value="c" name="enfermedad[2]" <?php echo ( isset($diabetico) ? $diabetico : "");?>>
                                            Diabético/a
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                           <input  type="checkbox" value="d" name="enfermedad[3]" <?php echo ( isset($fumador) ? $fumador : "");?>>
                                            Fumador/a
                                        </label>
                                    </td>
  
                                </tr>
                                <tr class="enfermedad">
                                    
                                    <td>
                                        <label class="label  checkbox">
                                            <input  type="checkbox" value="e" name="enfermedad[4]" <?php echo ( isset($ninguna) ? $ninguna : "");?>>
                                            Ninguna
                                        </label>
                                    </td>
                                </tr>
       
                             
                            </tbody>
                        </table>    
                    </div>
                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth " style="border-radius:15px ;">
                            <thead>
                                <p class="parrafo" style="color:white">Indique si ha tenido alguno de estos síntomas al realizar esfuerzos o ejercicio físico.</p>
                            </thead>
                            <tbody >
                               <?php
                                    if (!empty($resultado)){ 
                                        $rta_chk2 = str_split($resultado['respuesta_Chek2']);
                                        foreach( $rta_chk2 as $chk_sintoma){
                                            switch($chk_sintoma){
                                                case "a":
                                                    $mareos = "checked";
                                                    break;
                                                case "b":
                                                    $desmayos = "checked";
                                                    break;
                                                case "c":
                                                    $nauseas = "checked";
                                                    break;
                                                case "d":
                                                    $respiracion = "checked";
                                                    break;
                                                case "e": 
                                                    $ninguna = "checked";  
                                                    break;                                             
                                            }
                                        }
                                    }
                                ?>								  
                                <tr class="enfermedad">
                                    <td>
                                        <label class="label checkbox">
                                           <input type="checkbox" value="a" name="sintoma[0]" <?php echo ( isset($mareos) ? $mareos : "");?>>
                                            Mareos
                                        </label>
                                    </td>

                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="b" name="sintoma[1]" <?php echo ( isset($desmayos) ? $desmayos : "");?>>
                                            Desmayos o Lipotimias
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="c" name="sintoma[2]" <?php echo ( isset($nauseas) ? $nauseas : "");?>>
                                            Naúseas
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="d" name="sintoma[3]" <?php echo ( isset($respiracion) ? $respiracion : "");?>>
                                            Dificultad para respirar
                                        </label>
                                    </td>
  
                                </tr>
                                <tr class="enfermedad">
                                    
                                    <td>
                                        <label class="label  checkbox">
                                            <input  type="checkbox" value="e" name="sintoma[4]" <?php echo ( isset($ninguna) ? $ninguna : "");?>>
                                            Ninguna
                                        </label>
                                    </td>
                                </tr>
       
                             
                            </tbody>
                        </table>    
                    </div>


                    

                  



                </div>
                <div class="buttons ">
                    <button type="submit" name="Enviar" id="Enviar" value ="Modificar" class="button is-warning is-rounded"><b>Modificar</b></button>
                </div>     
     
            </div>
            
        </form>
        <br>

     
    </section>
    <hr class="shadow">
    <footer class="footer">
        <?php
            include('../footer/footer.php')
        ?>
    </footer> 

  </body>
</html>