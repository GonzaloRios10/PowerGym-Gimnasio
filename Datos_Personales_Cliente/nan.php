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
    
      <section class="section main-cliente" >
        <form action="" method="POST"  >
            <div class="container " style=" border: solid 3px white;;margin-top:80px;">
                <div class="buttons ">
                    <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                </div>
                <h2 class="info" ><span > Medidas Personales</span></h2><br>
                <div class="field primero  ">

                       
                    
                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                 
                           <tbody>
                           <tr class="Personalestr">
                                <td class="Personales">
                                    
                                    <label class="label">Tipo de Comida</label>
                                    <div class="control" >
                                        <div class="select" >
                                            <select  name="Tipo_Comida"  >
                                                <option hidden>Elija una opción</option>
                                                <option value="1">Desayuno</option>
                                                <option value="2">Almuerzo</option>
                                                <option value="3">Merienda</option>
                                                <option value="4">Cena</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Nombre:</label>
                                    <div class="control">
                                        <div class="control">
                                            <input class="input is-rounded" type="text" name="Nombre_Comida" required placeholder="Ingrese el nombre de la comida"  >
                                        </div>
                                    </div>
                                </td>
                               
                            </tr>

                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Cantidad:</label>
                                    <div class="control">
                                        <input   name="Cantidad" required  class="input is-rounded"  type="number" placeholder="Ingrese la cantidad" >
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Calorías:</label>
                                    <div class="control">
                                        <input   name="Calorias" required class="input is-rounded"  type="number" placeholder="Ingrese la cantidad de calorías" >
                                    </div>
                                </td>
                                
                            </tr>
                           
                           </tbody>
                        </table>
                    </div>

                </div>
                <div class="buttons ">
                    <button type="submit" name="Enviar"  class="button is-warning is-rounded"><b>Enviar</b></button>
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