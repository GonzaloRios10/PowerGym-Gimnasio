<?php

include("../conexion.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre Empresa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script defer src="../bulma/bulma.js"></script>
    <link rel="stylesheet" href="../bulma/bulma.min.css">
    <script src="https://kit.fontawesome.com/dd0442ec5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
  </head>
  <body>
    
   
    
    <!--navbar-->
    <nav class="navbar is-fixed-top is-black has-shadow" style="border-radius: 0px 0px 30px 30px;" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <div class="logo">
          <b>
            <p>
              <span class="logo_Empresa"> Nuestra Empresa</span>
            </p> 
          </b>
        </div>
      
      
        <a role="button" class="navbar-burger animated tada" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          
          <a class="navbar-item enlaces_navbar" href="../index.html">
            <b>Inicio</b>
          </a>
          <a class="navbar-item enlaces_navbar " href="../Quienes_Somos/quienes_somos.php">
            <b> Quienes Somos</b>
          </a>
      
      
          <div class="navbar-item has-dropdown is-hoverable " >
            <a class="navbar-link enlaces_navbar">
              <b>Más</b>
            </a>
            <div class="navbar-dropdown is-boxed" >
              <a class="navbar-item" href="./formulario.php">
                <b >Inscribirme</b>
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="../contactanos/contactanos.php">
                <b>Contactános</b>
              </a>
              
            </div>
          </div>
          </b>
        </div>
      
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
  
              <a class="button  is-warning  is-rounded buton_iniciar"  href="../Inicio_Sesion/login.php" >
                <span style="color:black;">Iniciar Sesión</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      </nav>
      
      
      <!--                                                        Main                                -->
    
      <section class="section main-formulario " >
        <form action="registro_usuarios.php" method="POST">
            <div class="container " style=" border: solid 3px white;margin-top:80px;">
                <h1  style="color: white;"><span class="span_formulario"><u style="color:#f7f57d;"> Formulario</u>  de Inscripción</span></h1><br>
                <div class="field primero  ">
                    <div class="table-container animated zoomIn" >
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                            <tbody>
                                 <tr class="Personalestr">
                                <td class="Personales" >
                                    <div class="control">
                                        <label class="label">Apellidos:</label>
                                        <input  class="input is-rounded" type="text" name="Apellido" placeholder="Ingrese el Apellido" required>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">Nombres:</label>
                                        <input class="input is-rounded" type="text" name="Nombre" placeholder="Ingrese los Nombres" required>
                                    </div>  
                                </td>
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">D.N.I.:</label>
                                        <input class="input is-rounded" type="text" name="Documento" placeholder="Ingrese el DNI (sin puntos)" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="control">
                                        <label class="label">Fecha de Nacimiento:</label>
                                        <input class="input is-rounded" name="FechaNacimiento" type="date" required>
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

                                                    <option value="<?php echo $id?>">
                                                      <?php echo $desc_genero?>    
                                                    </option>
                                                  
                                                  <?php
                                                    }
                                                  ?>
                                                    <option disabled="true" selected="true" value="0">Seleccione el sexo
                                                    </option>                                        
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

                                                    <option value="<?php echo $id_est?>">
                                                      <?php echo $desc_estado?>    
                                                    </option>
                                                  
                                                  <?php
                                                    }
                                                  ?>
                                                  
                                                    <option disabled="true" selected="true" value="0">Seleccione el estado civil
                                                    </option>                                        
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
                                              Seleccione la provincia
                                            </option>                                        
                                          </select>
                                        <div class="select">
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
                                $('#lista1').val(0);
                                recargarLista();

                                $('#lista1').change(function(){
                                  recargarLista();
                                });
                              })
                            </script>
                            
                            <script type="text/javascript">
                              function recargarLista(){
                                $.ajax({
                                  type:"POST",
                                  url:"datos-provincia_localidad.php",
                                  data:"provincia=" + $('#lista1').val(),
                                  success:function(r){
                                    $('#select2lista').html(r);
                                  }
                                });
                              }
                            </script>

                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Domicilio:</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="text" name="Domicilio" placeholder="Ingrese su domicilio" required>
                                        </div>
                                    <td class="Personales">
                                      <label class="label">Teléfono:</label>
                                      <div class="control">
                                          <input class="input is-rounded" name="Telefono" type="text"  placeholder="Ingrese el Teléfono" >
                                      </div>
                                    </td>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Correo Electrónico:</label>
                                    <div class="control">
                                        <input class="input is-rounded" name="Correo" type="email"  placeholder="Ingrese el Teléfono" >
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth " style="border-radius:15px ;">
                            <thead>
                                <p class="parrafo" style="color:white">Datos para el Sistema</p>
                            </thead>
                            <tbody >

                                <tr class="Personalestr">
                                    <td class="Personales">
                                        <label class="label"> Usuario:</label>
                                        <div class="control">
                                            <input name="Usuario" class="input is-rounded"  type="text" placeholder="Ingrese el usuario" >
                                        </div>
                                    </td>
                                    <td class="Personales">
                                        <label class="label">Contraseña:</label>
                                        <div class="control">
                                            <input name="Contraseña" class="input is-rounded"  type="password" placeholder="Ingrese la Contraseña" >
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>

                    <div>
                        <br>
                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                <input type="checkbox" required name="Acuerdo" value="2">
                                <span> Estoy de acuerdo con las</span> 
                                </label>
                                <a target="_blank"  href="./regla.php" style="color:#f7f57d;"><b>el Reglamento del Establecimiento.(Opcional)</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons ">
                    <button type="submit" name="Enviar" class="button is-warning is-rounded"><b>Enviar</b></button>
                </div>
            </div>
            
        </form>
    </section>
    <!--                                          Footer                                            -->
    <footer class="footer">
        <?php
            include('../footer/footer.php');
        ?>
    </footer> 
  </body>
</html>