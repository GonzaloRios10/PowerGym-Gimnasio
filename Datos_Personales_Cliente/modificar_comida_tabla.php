<?php

require("../conexion.php");

session_start(); 

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

    <?php

    $id = $_GET['id'];

    $consulta = "SELECT * FROM alimentos
    WHERE idalimentos = '".$id."'";

    $resultado = mysqli_query($conex, $consulta);

    while ($registro = mysqli_fetch_assoc($resultado)) {

    ?>  
  <!---->      
  <section class="section main-cliente">

    <div class="container " style=" border: solid 3px white;margin-top:120px;">
        <div >
            <a name="Enviar" href="../Datos_Personales_Cliente/planilla_comidas_tabla.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
            <h2 class="info ">Modificar Comida</h2><br>
        </div>

        <form action="modificar_comidas.php" method="POST">
            <div class="table-container ">
                <table class="table  is-fullwidth display " id="example" style="border-radius: 20px;" >
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Comida</th>
                            <th>Calorías(100grs.)</th>
                            <th>Grasa Totales</th>
                            <th>Hidratos</th>
                            <th>Proteínas</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <input placeholder="Codigo" name="id" style="visibility:hidden;" value="<?php echo $registro['idalimentos']?>">

                            <td data-cell="N° Músculo" style="font-size:20px;font-weight: bold;"><?php echo $registro['idalimentos']?></td>
                            <td data-cell="Nombre" class="Personales">
                                <div class="control">
                                    <input type="text" name="nom_comida" class="input is-rounded" placeholder="Nombre de la comida" value="<?php echo $registro['Nombre']?>" style="color:black;" >
                                </div>     
                            </td>
                            <td data-cell="N° Músculo" style="font-size:20px;font-weight: bold;">
                                <input type="number" step="0.01" name="calorias" class="input is-rounded" placeholder="Cantidad de calorías" value="<?php echo $registro['Calorias']?>"  style="color:black;" >
                            </td>
                            <td data-cell="N° Músculo" style="font-size:20px;font-weight: bold;">
                                <input type="number" step="0.01" name="grasas" class="input is-rounded" placeholder="Cantidad de grasa"  value="<?php echo $registro['Grasas']?>"  style="color:black;" >
                            </td>
                            <td data-cell="N° Músculo" style="font-size:20px;font-weight: bold;">
                                <input type="number" step="0.01" name="hidratos" class="input is-rounded" placeholder="Cantidad de hidratos" value="<?php echo $registro['Hidratos']?>"  style="color:black;" >
                            </td>
                            <td>
                                <input name="proteinas" class="input is-rounded" value="<?php echo $registro['Proteinas']?>" type="number" step="0.01" placeholder="Cantidad de proteínas" >
                            </td>
                        </tr>
                    </body>
                    <?php
                        }
                    ?>
                </table><br>


                <div class="buttons ">
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