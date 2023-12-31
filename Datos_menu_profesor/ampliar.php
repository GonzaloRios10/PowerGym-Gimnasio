<?php
    require("../conexion.php");
    session_start(); 
    
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            include('./head.php')
        ?>
        <link rel="stylesheet" href="../Datos_Personales_Cliente/tabla.css">        
    </head>
  <body>
        <?php
        include('../menu/navbar_profesor.php');
        ?>
        
        <?php $id = $_GET['id'];?>
        
        <?php
            $consulta = "SELECT * FROM ficha_medica fm
            INNER JOIN usuario u ON u.idusuario = fm.usuario_idusuario
            INNER JOIN localidad l ON l.idLocalidad = u.Localidad_idLocalidad
            INNER JOIN provincia p ON p.idProvincia = l.Provincia_idProvincia
            INNER JOIN codigo_postal cp ON cp.idcodigo_postal = l.codigo_postal_idcodigo_postal
            INNER JOIN genero ON u.genero_idgenero = genero.idgenero            
            INNER JOIN estadocivil ec ON ec.idEstadoCivil = u.EstadoCivil_idEstadoCivil
            WHERE idusuario = '".$id."'";

            $resultado = mysqli_query($conex, $consulta) or
                die("Problemas en el SELECT: ".mysqli_error($conex));

            if ($resultado) {
        ?>
        <section class="section main-profesor">
        <?php
            while ($row = mysqli_fetch_array($resultado)) {            
        ?>
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="./datos_clientes_nuevo.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>                   
                    <h2 class="info"  >Información Personal de <span  style="color:#f7f57d;"><u><?php echo $row['Nombre'] ?></u></span></h2><br>
                </div>

                <div class="table-container animated zoomIn">
                    <table  class="table is-fullwidth " style=" text-align: center;border-radius: 20px;">                    
                        <thead >
                            <tr >                            
                                <th style=" text-align: center;">Estado Civil</th>
                                <th style=" text-align: center;">Sexo</th>
                                <th style=" text-align: center;">Localidad</th>
                                <th style=" text-align: center;">Provincia</th>
                                <th style=" text-align: center;">Código Postal</th>
                                <th style=" text-align: center;">Correo Electrónico</th>
                            </tr>
                        </thead>

                        <tbody>                           
                            <tr>
                                <td data-cell="Estado Civil" style=" text-align: center;"><?php echo $row['Desc_estadocivil']?></td>
                                <td data-cell="Sexo" style=" text-align: center;"><?php echo $row['genero']?></td>
                                <td data-cell="Localidad" style=" text-align: center;"><?php echo $row['Nombre_Localidad']?></td>
                                <td data-cell="Provincia" style=" text-align: center;"><?php echo $row['Nombre_pro']?></td>
                                <td data-cell="Código Postal" style=" text-align: center;"><?php echo $row['Codigo_P']?></td>
                                <td data-cell="Correo Electrónico" style=" text-align: center;"><?php echo $row['Email']?></td>
                            </tr>
                        </tbody>                
                    </table>
                    <h2 class="info"  >Cuestionario de Salud</h2><br>                    
                    <div class="table-container animated zoomIn">
                        <table  class="table is-fullwidth " style="border-radius: 20px;">
                            <thead>
                                <tr >
                                    <th style="text-align: center;">Lesión Muscular</th>
                                    <th style="text-align: center;">Anemia</th>
                                    <th style="text-align: center;">Inscrito otro gym o Deporte</th>
                                    <th style="text-align: center;">¿Es Usted?</th>
                                    <th style="text-align: center;">Peso</th>
                                    <th style="text-align: center;">Altura</th>
                                    <th style="text-align: center;">Masa Corporal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  >
                                    <td data-cell="Lesión Muscular" style="text-align: center;"><?php echo $row['respuesta2']?></td>
                                    <td data-cell="Anemia" style="text-align: center;"><?php echo $row['respuesta4']?></td>
                                    <td data-cell="Inscrito otro gym o Deporte" style="text-align: center;"><?php echo $row['respuesta6']?></td>
                                    <td data-cell="¿Es Usted?" style="text-align: center;">
                                    <?php 
                                        $opciones = explode(',', $row['Respuesta_Chek1']); // convertir opciones separadas por comas en un array
                                        foreach ($opciones as $opcion) {
                                            if ($opcion == 'a') {
                                                echo "Asmático/a<br>";
                                            } 
                                            if ($opcion == 'b') {
                                                echo "Epileptico/a<br>";
                                            } 
                                            if ($opcion == 'c') {
                                                echo "Diabético/a<br>";
                                            } 
                                            if ($opcion == 'd') {
                                                echo "Fumador/a<br>";
                                            } 
                                            if ($opcion == 'e') {
                                                echo "Ninguna<br>";
                                            }         
                                        }  
                                    ?></td>
                                    <?php $masa_corporal = $row['Peso'] / (($row['Altura']/100) * ($row['Altura']/100)) ; ?>;
                                    <td data-cell="Peso" style="text-align: center;"><?php echo $row['Peso']?></td>
                                    <td data-cell="Altura" style="text-align: center;"><?php echo $row['Altura']?></td>                               
                                    <td data-cell="Masa" style="text-align: center;"><?php echo round($masa_corporal,2);  ?></td>                                
                                </tr>
                            </tbody>                        
                        </table><br>                
                        
                        <table  class="table is-fullwidth " style="border-radius: 20px;">
                            <thead>
                                <tr class="tr_font">
                                    <th style="text-align: center;">Lesión Ósea</th>
                                    <th style="text-align: center;">Afixia</th>
                                    <th style="text-align: center;">síntomas al realizar esfuerzos</th>
                                    <th style="text-align: center;">Cardiovascular</th>
                                    
                                </tr>
                            </thead>                            
                            <tbody>                                
                                <tr  >
                                    <td data-cell="Lesión Ósea" style="text-align: center;"><?php echo $row['respuesta1']?></td>
                                <td data-cell="Afixia" style="text-align: center;"><?php echo $row['respuesta5']?></td>
                                <td data-cell="síntomas al realizar esfuerzos" style="text-align: center;">
                                <?php 
                                    $opciones = explode(',', $row['respuesta_Chek2']); // convertir opciones separadas por comas en un array
                                    foreach ($opciones as $opcion) {
                                        if ($opcion == 'a') {
                                            echo "Asmático/a<br>";
                                        } 
                                        if ($opcion == 'b') {
                                            echo "Epileptico/a<br>";
                                        } 
                                        if ($opcion == 'c') {
                                            echo "Diabético/a<br>";
                                        } 
                                        if ($opcion == 'd') {
                                            echo "Fumador/a<br>";
                                        } 
                                        if ($opcion == 'e') {
                                            echo "Ninguna<br>";
                                        }         
                                    }                                      
                                ?></td>
                                <td data-cell="Cardiovascular" style="text-align: center;"><?php echo $row['respuesta3']?></td>             
                            </tr>
                            <?php
                            }                            
                            ?>        
                        </tbody>
                        </table><br>
                        <?php
                            }
                        ?>   
                    </div>                    
                </div>
            </div> 
        </section>
        <hr class="shadow">
        <footer class="footer">
            <?php
                include('../footer/footer.php')
            ?>
        </footer> 
        <script type="text/javascript" src="./js/jquery.min.js"></script>
    </body>
</html>
