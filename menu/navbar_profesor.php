<?php

include("../conexion.php");
session_start();

?>

<nav  class="navbar is-fixed-top is-black has-shadow" style="border-radius: 0px 0px 30px 30px;" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
      <div class="logo">
          <b>
            <p>
              <span class="logo_Empresa"> Nuestra Empresa</span>
            </p> 
          </b>
        </div>
        <div class="navbar-burger animated tada" data-target="navbarExampleTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      



      <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
        <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;" href="../menu/menu_profesor.php">
               <b><ion-icon name="home"></ion-icon> Inicio</b>
              </a>

    
            </div>
          </div>
          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b><ion-icon name="reader"></ion-icon> Mis Datos</b>
              </a>
              <div class="navbar-dropdown is-boxed" style="font-size:17px;">
                  <a class="navbar-item "   href="../Datos_menu_profesor/datos_personales_profesor.php"><b> <ion-icon name="return-up-forward"></ion-icon>Datos Personales</b></a>

              </div>
    
            </div>
          </div>
          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b><ion-icon name="document-text"></ion-icon> Clientes</b>
              </a>
              <div class="navbar-dropdown is-boxed" style="font-size:17px;">

                  <a class="navbar-item "   href="../Datos_menu_profesor/datos_clientes_nuevo.php"><b> <ion-icon name="return-up-forward"></ion-icon>Datos Clientes</b></a>
              </div>
    
            </div>
          </div>

          <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">

          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b><ion-icon name="barbell"></ion-icon> Rutinas</b>
              </a>
              <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item " style="font-size:17px;" href="../Datos_menu_profesor/crear_rutinas.php"><b> <ion-icon name="return-up-forward"></ion-icon> Crear</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item " style="font-size:17px;" href="../Datos_menu_profesor/listar_rutinas.php"><b> <ion-icon name="return-up-forward"></ion-icon> Listar</b></a>

              
              </div>
 
            </div>
          </div>

          <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">

          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b><img src="../imagenes/musculo.png "            alt=""> Músculo</b>
              </a>
              <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" style="font-size:17px;" href="../Datos_menu_profesor/crear_musculo.php"><b><ion-icon name="return-up-forward"></ion-icon> Crear</b></a>
                <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                <a class="navbar-item" style="font-size:17px;" href="../Datos_menu_profesor/crear_ejercicios.php" ><b><ion-icon name="return-up-forward"></ion-icon> Ejercicios</b></a>
                </div>
 
            </div>
          </div>

          <!-- <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b>item3</b>
              </a>
              <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" style="font-size:17px;" href=""><b>item4</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item" style="font-size:17px;" href=""><b>item5</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item" style="font-size:17px;" href=""><b>item6</b></a>
              </div>
    
            </div>
          </div> -->


        </div>


        <div class="navbar-end has-icons-left">
          <div class="navbar-item ">
          <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                  <?php
                  $session_usuario = $_SESSION['UsuarioProfesor'];
                  $consulta = mysqli_query($conex, "SELECT Usuario, idusuario FROM usuario WHERE Usuario = '".$session_usuario."'");

                  $resultado = mysqli_fetch_array($consulta);
                  
                  if ($resultado) {

                  ?>

                  <b><ion-icon name="person-circle" ></ion-icon> 
                    <?php echo $resultado['Usuario']?>
                  </b>
                   <?php
                }
                ?>
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" style="font-size:17px;" href="../Datos_menu_profesor/modificar_user_pass_profe.php?id=<?php echo $resultado['idusuario']?>"><b><ion-icon name="return-up-forward"></ion-icon> Opciones</b></a>
                    <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                    <a class="navbar-item" style="font-size:17px;" href="../Inicio_Sesion/cerrar_sesion.php"><b><ion-icon name="return-up-forward"></ion-icon> Cerrar sesión</b></a>
                    <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);"><br><br>
                   
                </div>
      
              </div>
            </div>
          </div>
        </div>

      </div>
    </nav>