<!DOCTYPE html>
<html lang="en">

    <head>
    <?php
        include('./head.php');
        
    ?>
        <link rel="stylesheet" href="./borrar.css">
    </head>

    <body>
        <?php
        include('../menu/navbar_profesor.php');
        $id = $_GET["id"];
        ?>
        <section class="section main-profesor1">
            <form action="./borrado_logico_listarRutinas.php" method="post">
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
              <h2 >¿Estás seguro de elimiar el registro N°1?</h2><br>

              <div class="buttons" >
                <a href="./listar_rutinas.php"><button class="button is-danger is-medium is-rounded is-responsive" ><b>Cancelar</b></button></a><br>
                <label for="inputOculto"></label>
                               <input type="text" name="id" value="<?php echo $id;?> " id="inputOculto" style="display: none;"> 
                <button type="submit" name="enviar"  class="button is-success is-rounded is-medium is-responsive "><b>Eliminar</b></button>
              </div>



          </div> 
            </form>
          


        </section>
        <hr class="shadow">
        <footer class="footer">
            <?php
            include('../footer/footer.php')
            ?>
        </footer>
        <script type="text/javascript" src="./functions.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <script src="./sweetalert2.all.min.js"></script>
    </body>

</html>