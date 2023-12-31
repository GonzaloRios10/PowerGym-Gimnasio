<?php

include("../conexion.php");

session_start();

if (isset($_GET['id'])) {
    $consulta = $conex ->query("SELECT * FROM mensaje_contacto WHERE idmensaje_contacto=".$_GET['id']);
    if(mysqli_num_rows($consulta) > 0) {
        $fila = mysqli_fetch_row($consulta);
    }else{
        header("Location: ver_mensaje.php");
    }
}else{
    header("Location: ver_mensaje.php");
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        include('./head.php')
        ?>

    </head>

    <body>
        <?php
        include('../menu/navbar_admin.php')
        ?>
        <section class="section main-login">

                
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="./ver_mensaje.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info">Ampliar Mensaje N°<?php echo $fila[0]?></h2><br>
                </div>

                <div class="table-container animated zoomIn">
                    <div class="box">
                        
                        <div class="box">
                            <strong style="font-size:25px"><?php echo $fila[4]?></strong>
                        </div>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <strong style="font-size:23px"><?php echo $fila[1]?></strong>&nbsp;&nbsp;&nbsp;<small style="font-size: 20px;"><?php echo $fila[2]?></small>
                                    <p>
                                        <?php echo $fila[5]?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                

                    
                </div><br>



            </div> 


        </section>

        <footer class="footer">
            <?php
            include('../footer/footer.php')
            ?>
        </footer>
    </body>

</html>