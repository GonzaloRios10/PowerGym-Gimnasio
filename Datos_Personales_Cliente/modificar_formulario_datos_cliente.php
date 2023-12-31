<?php

include("../conexion.php");

session_start(); 

?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
        <?php
            include('./head.php');
        ?>
    </head>
  <body>
    
    <!--navbar-->
    <?php
        include('../menu/navbar_cliente.php');
    ?>

    <?php

    $id = $_GET['id'];

    $consulta = "SELECT * FROM usuario user 
    INNER JOIN localidad loca ON user.Localidad_idLocalidad = loca.idLocalidad 
    INNER JOIN provincia prov ON prov.idProvincia = loca.Provincia_idProvincia
    INNER JOIN codigo_postal cod_post ON cod_post.idCodigo_Postal = loca.Codigo_Postal_idCodigo_Postal 
    INNER JOIN estadocivil estcivil ON user.EstadoCivil_idEstadoCivil = estcivil.idEstadoCivil
    INNER JOIN genero gen ON user.genero_idgenero = gen.idgenero
    WHERE idusuario = '".$id."'";

    $resultado = mysqli_query($conex, $consulta);

    while ($registro = mysqli_fetch_assoc($resultado)) {

    ?>      
      <!--                                                        Main                                -->
      <section class="section  main-clientes" >
        <form action="modificar_usuarios.php" method="POST">
            <div class="container " style=" border: solid 3px white;margin-top:80px;">
                <div>
                    <a name="Enviar" href="./datos_personales_cliente.php"  class=" is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info"><span ><u style="color:#f7f57d;"> Modificar</u> Datos Personales</span></h2><br>
                </div>
    
                <div class="field primero">
                    <div class="table-container animated zoomIn" >
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                            <tbody>
                                
                                <input placeholder="Codigo" name="id" style="visibility:hidden;" value="<?php echo $registro['idusuario']?>">

                                <tr class="Personalestr">
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">Apellidos:</label>
                                        <input class="input is-rounded" type="text" name="Apellido" placeholder="Ingrese el Apellido" value="<?php echo $registro['Apellido']?>" required>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">Nombres:</label>
                                        <input class="input is-rounded" type="text" name="Nombre" placeholder="Ingrese los Nombres" value="<?php echo $registro['Nombre']?>" required>
                                    </div>  
                                </td>
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">D.N.I.:</label>
                                        <input class="input is-rounded" type="text" name="Documento" placeholder="Ingrese el DNI (sin puntos)" value="<?php echo $registro['DNI']?>" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="control">
                                        <label class="label">Fecha de Nacimiento:</label>
                                        <input class="input is-rounded" name="FechaNacimiento" type="date" value="<?php echo $registro['Fecha_nacimiento']?>" required>
                                    </div>
                                </td>
                            </tr>

                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Sexo:</label>
                                    <div class="control">
                                        <div class="control">
                                            <div class="select">
                                               <select name="Sexo">
                                                  <?php
                                                    $consulta = "SELECT * FROM genero";
                                                    $ejecutar = mysqli_query($conex, $consulta);
                                                  ?>

                                                  <?php
                                                    while($row = mysqli_fetch_array($ejecutar)){
                                                    $id = $row['idgenero'];
                                                    $desc_genero = $row['genero'];
                                                  ?>

                                                    <option value="<?php echo $id?>" <?php if($desc_genero == $registro['genero']){echo "selected='selected'";}?>>
                                                        <?php echo $desc_genero?>
                                                    </option>
                                                  
                                                  <?php
                                                    }
                                                  ?>
                                                                                          
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Estado Civil:</label>
                                    <div class="control">
                                        <div class="control">
                                            <div class="select">
                                                <select name="EstadoCivil">
                                                  <?php
                                                    $consulta = "SELECT * FROM estadocivil";
                                                    $ejecutar = mysqli_query($conex, $consulta);
                                                  ?>

                                                  <?php
                                                    while($row = mysqli_fetch_array($ejecutar)){
                                                    $id_est = $row['idEstadoCivil'];
                                                    $desc_estado = $row['Desc_estadocivil'];
                                                  ?>

                                                    <option value="<?php echo $id_est?>" <?php if($desc_estado == $registro['Desc_estadocivil']){echo "selected='selected'";}?>>
                                                        <?php echo $desc_estado?>
                                                    </option>
                                                  
                                                  <?php
                                                    }
                                                  ?>                                   
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Provincia:</label>
                                    <div class="control">
                                        <div class="select">
                                            <select id="lista1">
                                                <?php
                                                $consulta = "SELECT * FROM provincia";
                                                $ejecutar = mysqli_query($conex, $consulta);
                                                ?>

                                                <?php
                                                while($row = mysqli_fetch_array($ejecutar)){
                                                $id = $row['idProvincia'];
                                                $desc_prov = $row['Nombre_pro'];
                                                ?>

                                                <option value="<?php echo $id?>">
                                                    <?php echo $desc_prov?>    
                                                </option>
                                                <?php
                                                }
                                                ?>
                                                <option disabled="true" selected="true" value="0">
                                                    <?php echo $registro['Nombre_pro']?>
                                                </option>                                       
                                            </select>
                                        </div>    
                                    </div>
                                </td>

                                <td class="Personales">
                                    <label class="label">Localidad:</label>
                                    <div class="control">
                                        <div class="select">
                                            <select id="select2lista" name="LocalidadProvincia"></select>
                                        </div>
                                    </div> 
                                </td>
                            </tr>

                            <script type="text/javascript">
                                $(document).ready(function(){
                                    var provincia_usuario = "<?php echo $registro['Provincia_idProvincia'] ?>";

                                    // Establecer la provincia del usuario como seleccionada en el select de provincias
                                    $('#lista1').val(provincia_usuario);
                                    
                                    // Cargar las localidades de la provincia del usuario
                                    recargarLista();

                                    $('#lista1').change(function(){
                                      recargarLista();
                                    });
                                    
                                })
                            </script>
                            
                            <script type="text/javascript">
                                var provincia = $('#lista1').val();
                                function recargarLista(){
                                    $.ajax({
                                      type:"POST",
                                      url:"../inscribirme/datos-provincia_localidad.php",
                                      data:"provincia=" + $('#lista1').val(),
                                      success:function(r){
                                        $('#select2lista').html(r);
        
                                        // Obtener el valor de la localidad del usuario
                                        var localidad_usuario = "<?php echo $registro['Localidad_idLocalidad'] ?>";
                                        
                                        // Establecer la localidad del usuario como seleccionada en el select de localidades
                                        $('#select2lista').val(localidad_usuario);
                                      }
                                    });
                                }
                            </script>

                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Domicilio:</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="text" name="Domicilio" placeholder="Ingrese su domicilio" value="<?php echo $registro['Domicilio']?>" required>
                                        </div>
                                    <td class="Personales">
                                      <label class="label">Teléfono:</label>
                                      <div class="control">
                                          <input class="input is-rounded" name="Telefono" type="text"  placeholder="Ingrese el Teléfono" value="<?php echo $registro['Celular']?>">
                                      </div>
                                    </td>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Correo Electrónico:</label>
                                    <div class="control">
                                        <input class="input is-rounded" name="Correo" type="email"  placeholder="Ingrese el Teléfono" value="<?php echo $registro['Email']?>">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="buttons ">
                    <button type="submit" name="Enviar" class="button is-warning is-rounded"><b>Guardar Cambios</b></button>
                </div>
            </div>
        </form>
        <br>
    <?php
    }
    ?>
    </section>
    <hr class="shadow">
    <footer class="footer">
        <?php
            include('../footer/footer.php')
        ?>
    </footer> 

  </body>
</html>