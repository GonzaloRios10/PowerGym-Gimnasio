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
    <body >
    
   
    
        <!--navbar-->
        <?php
            include('../menu/navbar_admin.php');
        
        ?>
        <?php
              }else{
                header('location: ../Inicio_Sesion/login.php');
              }
            ?>
    
      
      
      <!--  Main -->
    
        <section class="section main-login">

            
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="../menu/menu_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    
                    <h2 class="info"  >Información Personal</h2><br>
                </div>

           


                <div class="table-container animated zoomIn">
                    <table  class="table is-fullwidth " style=" text-align: center;border-radius: 20px;">
                        <thead >
                            <tr >
                            
                                <th style=" text-align: center;">Matrícula</th>
                                <th style=" text-align: center;">Profesor</th>
                                <th style=" text-align: center;">Documento</th>
                                <th style=" text-align: center;">Fecha de Nacimiento</th>
                                <th style=" text-align: center;">Estado Civil</th>
                        
                            


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-cell="Matrícula" style=" text-align: center;">1</td>
                                <td data-cell="Profesor" style=" text-align: center;">Leonel Messi</td>
                                <td data-cell="Documento" style=" text-align: center;">33.241.875</td>
                                <td data-cell="Fecha de Nacimiento" style=" text-align: center;">12/06/1995</td>
                                <td data-cell="Estado Civil" style=" text-align: center;">Soltero</td>
                                        
                                
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
                                <td data-cell="Teléfono" style=" text-align: center;">3764114287</td>
                                <td data-cell="Domicilio" style=" text-align: center;">En Catamarca</td>
                                <td data-cell="Fecha de Inscripción" style=" text-align: center;">22/05/1980</td>
                                <td data-cell="Sexo" style=" text-align: center;">Hombre</td>
                                <td data-cell="Localidad" style=" text-align: center;">Posadas</td>

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
                            <tr  > 
        

                                <td data-cell="Provincia" style=" text-align: center;">Misiones</td>
                                <td data-cell="Código Postal" style=" text-align: center;">3304</td>
                                <td data-cell="Correo Electrónico" style=" text-align: center;">Maximo_Fegundis@gmail.com</td>     
                            

                                <td data-cell="Acciones" style=" text-align: center;">
                              
                    
                                        <a class="button  is-warning  is-rounded is-small"  href="./modificar_formulario_datos_administrador.php" >
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