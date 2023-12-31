<!DOCTYPE html>
<?php

include("../conexion.php");

session_start(); 

?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            include('./head.php');
            ?>
            <link rel="stylesheet" href="./tabla.css">
    </head>
    <body >
    
   
    
        <!--navbar-->
        <?php
            include('../menu/navbar_profesor.php');
        
        ?>
    
      
      
      <!--  Main -->
    
        <section class="section main-clientes">
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    
                    <h2 class="info"  >Información Personal</h2><br>
                </div>

                <div class="table-container animated zoomIn">
                    <table  class="table is-fullwidth " style=" text-align: center;border-radius: 20px;">
                        <thead>
                            <tr>
                                <th style=" text-align: center;">Matrícula</th>
                                <th style=" text-align: center;">Profesor</th>
                                <th style=" text-align: center;">Documento</th>
                                <th style=" text-align: center;">Fecha de Nacimiento</th>
                                <th style=" text-align: center;">Estado Civil</th>
                            </tr>
                        </thead>

                        <?php
                        $session_usuario = $_SESSION['UsuarioProfesor'];
                        $consulta = mysqli_query($conex, "SELECT * FROM usuario user 
                        INNER JOIN localidad loca ON user.Localidad_idLocalidad = loca.idLocalidad 
                        INNER JOIN provincia prov ON prov.idProvincia = loca.Provincia_idProvincia
                        INNER JOIN codigo_postal cod_post ON cod_post.idCodigo_Postal = loca.Codigo_Postal_idCodigo_Postal 
                        INNER JOIN estadocivil estcivil ON user.EstadoCivil_idEstadoCivil = estcivil.idEstadoCivil
                        INNER JOIN genero gen ON user.genero_idgenero = gen.idgenero
                        WHERE Usuario = '".$session_usuario."'");

                        $resultado = mysqli_fetch_array($consulta);
                        
                        if ($resultado) {

                        ?>
                        <tbody>
                            <tr>
                                <td data-cell="Matrícula" style=" text-align: center;">
                                    <?php echo $resultado['idusuario']?> 
                                </td>
                                <td data-cell="Cliente" style=" text-align: center;">
                                    <?php echo $resultado['Nombre']; echo" "; echo $resultado['Apellido'];?>       
                                </td>
                                <td data-cell="Documento" style=" text-align: center;">
                                    <?php echo $resultado['DNI']?>
                                </td>
                                <td data-cell="Fecha de Nacimiento" style=" text-align: center;">
                                    <?php echo $resultado['Fecha_nacimiento']?>
                                </td>
                                <td data-cell="Estado Civil" style=" text-align: center;">
                                    <?php echo $resultado['Desc_estadocivil']?>
                                </td>    
                            </tr>
                        </tbody>
                       
                    </table>
                   
                    <!-- nuevo -->
                    <table  class="table is-fullwidth " style="border-radius: 20px;">
                        <thead>
                            <tr >
                                <th style=" text-align: center;">Teléfono</th>
                                <th style=" text-align: center;">Domicilio</th>
                                <th style=" text-align: center;">Fecha de Inscripción</th>
                                <th style=" text-align: center;">Sexo</th>
                                <th style=" text-align: center;">Localidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-cell="Teléfono" style=" text-align: center;">
                                    <?php echo $resultado['Celular']?>
                                </td>
                                <td data-cell="Domicilio" style=" text-align: center;">
                                    <?php echo $resultado['Domicilio']?> 
                                </td>
                                <td data-cell="Fecha de Inscripción" style=" text-align: center;">
                                    <?php echo $resultado['Fecha_inscripcion']?> 
                                </td>
                                <td data-cell="Sexo" style=" text-align: center;">
                                    <?php echo $resultado['genero']?>
                                </td>
                                <td data-cell="Localidad" style=" text-align: center;">
                                    <?php echo $resultado['Nombre_Localidad']?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  
                    <table  class="table is-fullwidth " style="border-radius: 20px;">
                        <thead>
                            <tr>
                                <th style=" text-align: center;">Provincia</th>
                                <th style=" text-align: center;">Código Postal</th>
                                <th style=" text-align: center;">Correo Electrónico</th>
                                <th style=" text-align: center;">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr> 
                                <td data-cell="Provincia" style=" text-align: center;">
                                    <?php echo $resultado['Nombre_pro']?>
                                </td>
                                <td data-cell="Código Postal" style=" text-align: center;">
                                    <?php echo $resultado['Codigo_P']?>
                                </td>
                                <td data-cell="Correo Electrónico" style=" text-align: center;">
                                    <?php echo $resultado['Email']?>
                                </td>     
                            

                                <td data-cell="Acciones" style=" text-align: center;">
                                    <a class="button  is-warning  is-rounded is-small"  href="modificar_formulario_datos_profesor.php?id=<?php echo $resultado['idusuario']?>">
                                        <span style="color:black;" >Modificar</span>
                                    </a>
                                </td>  
                            </tr>

                        </tbody>
                        <?php
                        }
                        ?>
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