<?php

include("../conexion.php");

session_start(); 

$usuario = $_SESSION['UsuarioProfesor'];

if (isset($_SESSION['UsuarioProfesor'])) {

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <script defer src="../bulma/bulma.js"></script>
    <link rel="stylesheet" href="../bulma/bulma.min.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../Datos_menu_profesor/estilos_datos_menu_profesor.css">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  </head>
  <body>
    <!--Navbar-->
    
    <?php
      include('./navbar_profesor.php');  
    ?>

    <?php
      }else{
        header('location: ../Inicio_Sesion/login.php');
      }
    ?>

    <!--/navbar-->

  <!---->      
    <section class="hero is-fullheight-with-navbar main-profesor" style="height: 100vh;">
      <div class="hero-body">
        <?php
        $session_usuario = $_SESSION['UsuarioProfesor'];
        $consulta = mysqli_query($conex, "SELECT Nombre, Apellido FROM usuario WHERE Usuario = '".$session_usuario."'");

        $resultado = mysqli_fetch_array($consulta);

        if ($resultado) {

        ?>
        <p class="title">
          Hola Profesor <b><?php echo $resultado['Nombre']?> <?php echo $resultado['Apellido']?>!</b> <br>
          Bienvenido al Sistema Nuestra Empresa
        </p>
        <?php
        }
        ?>
      </div>
    </section>


  </body>
</html>