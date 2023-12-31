
<!DOCTYPE html>
<html>
  <head>
    <?php
      include('./head.php');
    ?>
    <link rel="stylesheet" href="../Datos_menu_profesor/estilos_datos_menu_profesor.css">
    <link rel="stylesheet" href="../Datos_Personales_Cliente/tabla.css">
    <script src="./evento.js"></script>
  </head>
  <body>
    <!--Navbar-->
    
    <?php
      include('../menu/navbar_profesor.php');  
    ?>

    <!--/navbar-->

  <!---->      
  <section class="section main-profesor">

            
    <div class="container " style=" border: solid 3px white;margin-top:120px;">
        <div >
            <a name="Enviar" href="../Datos_menu_profesor/crear_musculo.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
            <h2 class="info "  ><span ><u style="color:#f7f57d;">Crear</span ></u> Músculo</h2><br>
        </div>

     

        <form action="./guardar_modificacion_musculo.php" method="POST">

           
       
            <div class="table-container">

                <table class="table is-fullwidth display" id="example" style="border-radius: 20px;">
                    <thead>
                        <tr>
                            <th>N° Músculo</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include '../conexion.php';
                        $id = $_GET["id"]; 
                        $sql = "SELECT * FROM grupo_muscular WHERE idGrupo_Muscular = '$id'";
                        $query = mysqli_query($conex, $sql);
                        $row = mysqli_fetch_assoc($query);
                        ?>
                        <tr>
                            <td data-cell="N° Músculo" style="font-size:20px;font-weight: bold;"><?php echo $id ; ?></td>
                            <td data-cell="Nombre" class="Personales">
                                <div class="control">
                                <label for="inputOculto"></label>
                               <input type="text" name="id" value="<?php echo $id;?> " id="inputOculto" style="display: none;"> 
                                    <input type="text" name="musculo" class="input is-rounded" placeholder="Ingrese Nombre del Músculo" value="<?php echo $row['Musculo']; ?>" style="color:black;">
                                </div>                                       
                            </td>
                        </tr>
                    </tbody>
                </table><br>

                <div class="buttons">
                    <button type="submit" name="Enviar" class="button is-warning is-rounded"><b>Guardar Cambios</b></button>
                </div>
            </div>
        </form>

       
    </div>
    <br><br><br><br><br><br><br>
  
  </section>  <hr class="shadow">
  <footer class="footer">
      <?php
      include('../footer/footer.php')
      ?>
  </footer> 

  </body>
</html>