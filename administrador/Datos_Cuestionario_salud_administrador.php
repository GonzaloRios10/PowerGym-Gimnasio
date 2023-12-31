<?php

include("../conexion.php");

session_start(); 

$usuario = $_SESSION['UsuarioAdmin'];

if (isset($_SESSION['UsuarioAdmin'])) {

?>
<!DOCTYPE html>
<html>
  <head>
    <?php
        include('./head.php');
    ?>
      <link rel="stylesheet" href="./tabla_data.css">
  </head>
  <body>
    
   
    
    <!--navbar-->
    <?php
        include('../menu/navbar_admin.php');
    
    ?>
     <?php
              }else{
                header('location: ../Inicio_Sesion/login.php');
              }
            ?>
    
      
      
      <!--                                                        Main                                -->
    
    <section class="section main-login">

          
            <div class="container " style=" border: solid 3px white;;margin-top:80px;">
                <div >
                    <a name="Enviar" href="../menu/menu_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                 
                </div>

                <div class="field primero  ">


                    <h2 class="info" >Cuestionario de Salud</h2><br>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr  >
                                    <td data-cell="Lesión Muscular" style="text-align: center;">no,-</td>
                                    <td data-cell="Anemia" style="text-align: center;">no,-</td>
                                    <td data-cell="Inscrito otro gym o Deporte" style="text-align: center;">si,futbol</td>
                                    <td data-cell="¿Es Usted?" style="text-align: center;">Asmático</td>
                                    <td data-cell="Peso" style="text-align: center;">180 kg</td>
                                    <td data-cell="Altura" style="text-align: center;">1.88 metros</td>
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
                                <th style="text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr  >
                                <td data-cell="Lesión Ósea" style="text-align: center;">si, columna</td>
                                <td data-cell="Afixia" style="text-align: center;">si</td>
                                <td data-cell="síntomas al realizar esfuerzos" style="text-align: center;">Mareos</td>
                                <td data-cell="Cardiovascular" style="text-align: center;">No,-</td>
                                <td data-cell="Acciones" style="text-align: center;">
                          
                                        <a class="button  is-warning  is-rounded is-small"  href="./modificar_formulario_salud_administrador.php" >
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