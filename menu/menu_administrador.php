<?php

include("../conexion.php");

session_start(); 

$usuario = $_SESSION['UsuarioAdmin'];

if (isset($_SESSION['UsuarioAdmin'])) {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include('./head.php');
            ?>
            <link rel="stylesheet" href="./menu_admin.css">
        
    </head>
        <body>
            <?php
                include('./navbar_admin.php');
            ?>
            <?php
              }else{
                header('location: ../Inicio_Sesion/login.php');
              }
            ?>
            <section class="hero is-fullheight-with-navbar main-login" style="height: 100vh;">
            <div class="hero-body">
                <?php
                $session_usuario = $_SESSION['UsuarioAdmin'];
                $consulta = mysqli_query($conex, "SELECT Nombre, Apellido FROM usuario WHERE Usuario = '".$session_usuario."'");

                $resultado = mysqli_fetch_array($consulta);

                if ($resultado) {

                ?>
                <p class="title">
                  Hola Administrador <b><?php echo $resultado['Nombre']?> <?php echo $resultado['Apellido']?></b> <br>
                  Bienvenido al Sistema Nuestra Empresa
                </p>
                <?php
                }
                ?>
            </div>
            </section>
            <footer class="footer">
                    <?php
                    include('../footer/footer.php');
                    ?>
                </footer> 
        </body>
</html>