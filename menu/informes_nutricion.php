
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
    <link rel="stylesheet" href="../lib/datatables.min.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="./estilos_cliente_data.css">
        <link rel="stylesheet" href="./menu_cliente.css">
  </head>
  <body>
    <!--Navbar-->
    
    <?php
      include('../menu/navbar_cliente.php');  
    ?>

    <!--/navbar-->

  <!---->      
  <section class="section main-cliente">

            
    <div class="container " style=" border: solid 3px white;margin-top:120px;">
        <div >
            <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
            <h2 class="info "  >Planilla de Nutrición</h2><br>
        </div>

        <div class="table-container">

            <form action="" method="POST"  >

                <div class="table-container " >
                    <table class="table is-fullwidth" style="border-radius: 15px;">
                        <tbody>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">Desde:</label>
                                        <input type="date" class="input is-rounded" name="desde"  style="color:black;" >
                                    </div>
                                    
                                </td>
                                <td class="Personales">
                                    <div class="control">
                                        <label class="label">Hasta:</label>
                                        <input type="date" class="input is-rounded"  name="hasta" style="color:black;" >
                                    </div>
                                    
                                </td>
                            </tr>
                        </body>
                    </table>
                    <div class="buttons ">
                        <button type="submit" name="Enviar"  class="button is-warning is-rounded"><b>Enviar</b></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="table-container ">
            <h2 class="info "  >Comidas</h2><br>
                <table class="table  is-fullwidth display "   style="border-radius: 20px;" >
                    <thead>
                        <tr>

                            <th>Comidas</th>
                            <th>Calorías
                                (100grs)</th>
                            <th>Cantidad 
                                (grs)</th>
                            <th>Grasa Totales</th>
                            <th>Hidratos</th>
                            <th>Proteínas</th>
                            <th>Subtotal(Calorías)</th>
                            <th>Accinoes</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr >
                            <td  style="font-size:20px;">Ensalada de Palta con Brócoli</td>
                            <td  style="font-size:20px;">75</td>
                            <td  style="font-size:20px;">300</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">80</td>
                            <td  style="font-size:20px;">225</td>
                            <td   >
                                <a  href="./modificar_musculo.php"  class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>
                                <a  href=""  class="is-ghost "><img src="../imagenes/borrar.png" alt=""></a>
                            </td>      

                            
                        </tr>
                        

                        <tr >
                            <td  style="font-size:20px;">Puré de papa con Pescado</td>
                            <td  style="font-size:20px;">250</td>
                            <td  style="font-size:20px;">300</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">5</td>
                            <td  style="font-size:20px;">100</td>
                            <td  style="font-size:20px;">975</td>
                            <td   >
                                <a  href="./modificar_musculo.php"  class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>
                                <a  href=""  class="is-ghost "><img src="../imagenes/borrar.png" alt=""></a>
                            </td>      

                            
                        </tr>

                        
                
                    </tbody>

               
                </table>


            
        </div>
        <div class="table-container ">
            <h2 class="info "  >Bebidas</h2><br>
            <table class="table  is-fullwidth display "   style="border-radius: 20px;" >
                    <thead>
                        <tr>

                            <th>Bebidas</th>
                            <th>Calorías
                                (100mls)</th>
                            <th>Cantidad 
                                (mls)</th>
                            <th>Grasa Totales</th>
                            <th>Hidratos</th>
                            <th>Proteínas</th>
                            <th>Subtotal(Calorías)</th>
                            <th>Accinoes</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr >
                            <td  style="font-size:20px;">Té con leche</td>
                            <td  style="font-size:20px;">38</td>
                            <td  style="font-size:20px;">100</td>
                            <td  style="font-size:20px;">2,3</td>
                            <td  style="font-size:20px;">2,4</td>
                            <td  style="font-size:20px;">2,3</td>
                            <td  style="font-size:20px;">38</td>
                            <td   >
                                <a  href="./modificar_musculo.php"  class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>
                                <a  href=""  class="is-ghost "><img src="../imagenes/borrar.png" alt=""></a>
                            </td>      

                            
                        </tr>
                        

                        <tr >
                            <td  style="font-size:20px;">Té Rojo</td>
                            <td  style="font-size:20px;">100</td>
                            <td  style="font-size:20px;">80</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">86</td>
                            <td   >
                                <a  href="./modificar_musculo.php"  class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>
                                <a  href=""  class="is-ghost "><img src="../imagenes/borrar.png" alt=""></a>
                            </td>      

                            
                        </tr>

                        <tr >
                            <td  style="font-size:20px;">Coca Cola</td>
                            <td  style="font-size:20px;">105</td>
                            <td  style="font-size:20px;">300</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">0</td>
                            <td  style="font-size:20px;">401</td>
                            <td   >
                                <a  href="./modificar_musculo.php"  class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>
                                <a  href=""  class="is-ghost "><img src="../imagenes/borrar.png" alt=""></a>
                            </td>      

                            
                        </tr>
                
                    </tbody>


                </table>

            
        </div>
        <div class="table-container ">
            <h2 class="info "  >Totales</h2><br>
            <table class="table  is-fullwidth display "   style="border-radius: 20px;" >
                    <thead>
                        <tr>

                            <th>Calorías</th>
                            <th>Grasa Totales</th>
                            <th>Hidratos</th>
                            <th>Proteínas</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr >
                            <td  style="font-size:20px;">1376</td>
                            <td  style="font-size:20px;">2,3</td>
                            <td  style="font-size:20px;">7,4</td>
                            <td  style="font-size:20px;">182,3</td>
       
                            
                        </tr>
                        

                
                    </tbody>

        
                </table>

            
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