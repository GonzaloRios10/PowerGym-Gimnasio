<?

include("../conexion.php");

session_start();
if (isset($_SESSION['UsuarioClien'])) {
}else{
    header('location: ../Inicio_Sesion/login.php');
  }

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
    
      <section class="section main-cliente" >
        <form action="registro_bebida.php" method="POST"  >
            <div class="container " style=" border: solid 3px white;;margin-top:80px;">
                <div class="buttons ">
                    <a name="Enviar" href="./formulario_bebidas.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                </div>
                <h2 class="info" ><span >Crear Bebida</span></h2><br>
                <div class="field primero  ">

                <p style="color:white;"> <ion-icon name="information-circle"></ion-icon> Completar los datos que sean necesarios.</p>
                    
                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                 
                           <tbody>
                           <tr class="Personalestr" >

                                <td class="Personales">
                                    <label class="label">Nombre:</label>
                                    <div class="control">
                                        <div class="control">
                                            <input class="input is-rounded" type="text" name="Nombre_Bebida" required placeholder="Ingrese el nombre de la Bebida"  >
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Calorías (100mls):</label>
                                    <div class="control">
                                        <input   name="Calorias" required class="input is-rounded"   type="number" placeholder="Ingrese la cantidad de calorías" >
                                    </div>
                                </td>
                            </tr>

                            <tr class="Personalestr" >

                                <td class="Personales">
                                    <label class="label">Grasa Totales:</label>
                                    <div class="control" >
                                        <input   name="Grasas_totales"   class="input is-rounded"  type="number" placeholder="Ingrese la cantidad de grasa" >
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Hidratos:</label>
                                    <div class="control">
                                        <input   name="Hidratos"  class="input is-rounded"   type="number" placeholder="Ingrese la cantidad de hidratos" >
                                    </div>
                                </td>
                            </tr>
                        
                           
                            <tr class="Personalestr">
              
                                <td class="Personales">
                                    <label class="label">Proteínas:</label>
                                    <div class="control">
                                        <input   name="Proteinas"  class="input is-rounded"   type="number" placeholder="Ingrese la cantidad de proteínas" >
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