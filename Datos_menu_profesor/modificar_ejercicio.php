
<!DOCTYPE html>
<html>
  <head>
    <?php
      include('./head.php');
      include'../conexion.php';
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
            <a name="Enviar" href="../Datos_menu_profesor/crear_ejercicios.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
            <h2 class="info "  ><span ><u style="color:#f7f57d;">Modificar</span ></u> Ejercicio N°<?php echo"1";?></h2><br>
        </div>

     

        <form enctype="multipart/form-data" action="./update_musculo.php" method="POST"  >
               
           
       
            <div class="table-container ">
                <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
                    <thead>
                        <tr>

                           
                            <th>Músculo <br> (Elegir Músculo) </th>
                            <th>Ejercicio</th>
                            <th>Descripción</th>
                            <th>Calorias Quemadas
                        (cal/min)</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                $id = $_GET["id"]; 
                $sql="SELECT * FROM ejercicios where idEjercicios = '$id'";
                $query1=mysqli_query($conex,$sql);
                $row=mysqli_fetch_assoc($query1);
                ?>
                                <label for="inputOculto"></label>
                               <input type="text" name="id" value="<?php echo $id;?> " id="inputOculto" style="display: none;"> 

                        <tr >
                            
                            <td data-cell="Músculo">
                        
                                <div class="control">
                                    <div class="select " >
                                        <?php  $sql1="SELECT * FROM grupo_muscular"; 
                                                $query=mysqli_query($conex,$sql1);?>
                                        <select required name="Musculo" > <?php while($row1=mysqli_fetch_assoc($query)) { ?>
                                                <option hidden>Seleccione el Músculo</option>
                                                <option  value="<?php echo $row1['idGrupo_Muscular']; ?>"> <?php echo $row1['Musculo'];?> </option>
                                                <?php }?>
                                            </select>
                                </div>
                                </td>
                                <td data-cell="Ejercicio">
                                    <div class="control">
                                        <input type="text" name="ejercicio" class="input is-rounded" placeholder="Ingrese Nombre del Ejercicio" value="<?php echo $row['Nombre_eje']; ?>" style="color:black;width:65%;" >
                                    </div>
                                </td>
                                <td  data-cell="Descripción"  > 
                                    <textarea class="textarea" name="descripcion" placeholder="Ingrese una brebe descripción de como realizar el ejercicio"> <?php echo $row['descripcion_eje']; ?> </textarea>

                                </td>
                                <td data-cell="Calorias Quemadas(cal/min)" class="td_ejercicio"> 
                                    <input type="number" name="calo_quemadas" class="input is-rounded" value="<?php echo $row['calorias_quemadas']; ?>" placeholder="Ingrese la cantidad de calorias que se quema por ejercicio "></input>

                                </td>
                            
                                <td data-cell="Imagen">
                                    <div id="file-js-example" class="file has-name  is-normal" >
                                        <label class="file-label">
                                            <input class="file-input" type="file" name="imagen">
                                            <span class="file-cta">
                                            <span class="file-icon">
                                            </span>
                                            <span class="file-label" style="color:black;">
                                                Subir Archivo...
                                            </span>
                                            </span>
                                            <span class="file-name" style="color:black;">
                                                <?php echo"elevacion_de_piernas.png"?>
                                            </span>
                                        </label>
                                    </div>
                                </td>
                              
                            
                        </tr>
                        

                    </body>
                </table><br>


                <div class="buttons ">
                    <button type="submit" name="Enviar"  class="button is-warning is-rounded"><b>Guardar Cambios</b></button>
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