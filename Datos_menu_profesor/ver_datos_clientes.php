

<!DOCTYPE html>
<html>
<head>
<head>
    <?php
      include('./head.php');
    ?>
  </head>
  </head>
  <body>
    <?php
      include('../menu/navbar_profesor.php');
    ?>
  

    <!--Body-->
    <section class="hero  " >
      <div class=".container  "   >
        <div class="notification  main-clientes" >
          <h2  class="titulo_tabla" style="margin-top:180px;">Información Personal</h2><br>

          <div class="table-container">
            <table class="table" style="border-radius: 20px;margin:auto;">
              <thead>
                <tr class="tr_font">
                  <th >Matrícula</th>
                  <th >Cliente</th>
                  <th >Documento</th>
                  <th >Fecha de Nacimiento</th>
                  <th >Teléfono</th>
                  <th >Domicilio</th>
                  <th >Fecha de Inscripción</th>
  
                </tr>
              </thead>
              <tbody>
                <tr class="tr_font" style="text-align: center;">
                    <th >1</th>
                    <td >Juan Carlos</td>
                    <td >22.333.111</td>
                    <td >22/05/1980</td>
                    <td >3765002255</td>
                    <td >Los pepinos y Ancaramesi</td>
                    <td >19/04/2023</td>
                             
                    
                </tr>

              </tbody>
              
            </table>
            <br>
             <!-- nuevo -->

              <table class="table" style="border-radius: 20px;margin:auto;">
                <thead>
                  <tr class="tr_font">
                    <th>Sexo</th>
                    <th >Estado Civil</th>
                    <th>Localidad</th>
                    <th >Provincia</th>
                    <th >Código Postal</th>
                    <th >Correo Electrónico</th>
                    <th > + info </th>
                    <th>Accción</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="tr_font" style="text-align: center;"> 
                      <td>Hombre</td>
                      <td >Soltero</td>
                      <td >Posadas</td>
                      <td >Misiones</td>
                      <td >3304</td>
                      <td >juanCarlos@gmail.com</td>     
                      <th>
                      <div class="buttons">
  
                        <a class="button  is-warning  is-rounded buton_iniciar"  href="./ampliar_datos_personales.php" >
                          <span style="color:black;" >Ver</span>
                        </a>
                      </div>
                    
                      </th>     
                      <th>
                      <div class="buttons">
  
                        <a class="button  is-warning  is-rounded buton_iniciar"  href="./modificar_datos_cliente.php" >
                          <span style="color:black;" >Modificar</span>
                        </a>
                      </div>
                    
                      </th>     
                  </tr>

                </tbody>

              </table>

          </div>
      </div>
      
      
          
    
            
   

    </section>

   
  </body>

</html>