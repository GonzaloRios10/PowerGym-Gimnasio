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
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;" href="../menu/menu_cliente.php">
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
                  <a class="navbar-item " href="../Datos_Personales_Cliente/datos_personales_cliente.php"><b> <ion-icon name="return-up-forward"></ion-icon>Datos Personales</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item "  href="../Datos_Personales_Cliente/formulario_salud.php"><b><ion-icon name="return-up-forward"></ion-icon>Formulario de Salud</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item "   href="../Datos_Personales_Cliente/Datos_Cuestionario_salud.php"><b><ion-icon name="return-up-forward"></ion-icon>Informe de Salud</b></a>
                  
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
                  <a class="navbar-item " style="font-size:17px;" href="../Datos_Personales_Cliente/ver_rutina.php"><b><ion-icon name="return-up-forward"></ion-icon> Ver</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item " style="font-size:17px;" href="../Datos_Personales_Cliente/listar_rutina_cliente.php"><b><ion-icon name="return-up-forward"></ion-icon> Informes</b></a>

              </div>
 
            </div>
          </div>

          <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">

          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b><ion-icon name="fitness"></ion-icon> Nutrición</b>
              </a>
              <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" style="font-size:17px;" href="../Datos_Personales_Cliente/formulario_comida.php"><b><ion-icon name="return-up-forward"></ion-icon> Comidas</b></a>
                <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item" style="font-size:17px;" href="../Datos_Personales_Cliente/formulario_bebidas.php"><b><ion-icon name="return-up-forward"></ion-icon> Bebidas</b></a>
                  <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                  <a class="navbar-item" style="font-size:17px;" href="../Datos_Personales_Cliente/informes_nutricion.php"><b><ion-icon name="return-up-forward"></ion-icon>Informes</b></a>
                </a>
                </div>
 
            </div>
          </div>

          <!-- <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                <b>item3</b>
              </a>
              <div class="navbar-dropdown is-boxed">

                  
              </div>
    
            </div>
          </div>

 -->
        </div>


        <!--Lo modificado-->
        <div class="navbar-end has-icons-left">
          <div class="navbar-item ">
            <div class="navbar-item has-dropdown is-hoverable">
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-arrowless enlaces_navbar" style="font-size:23px;">
                 
                <?php
                  $session_usuario = $_SESSION['UsuarioClien'];
                  $consulta = mysqli_query($conex, "SELECT Usuario, idusuario FROM usuario WHERE Usuario = '".$session_usuario."'");

                  $resultado = mysqli_fetch_array($consulta);

                  $idusuario = $resultado['idusuario'];
                  
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
                    <a class="navbar-item" style="font-size:17px;" href="..\Datos_Personales_Cliente\modificar_user_pass.php?id=<?php echo $resultado['idusuario']?>"><b><ion-icon name="return-up-forward"></ion-icon> Opciones</b></a>
                    <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);">
                    <a class="navbar-item" style="font-size:17px;" href="../index.html"><b><ion-icon name="return-up-forward"></ion-icon> Cerrar sesión</b></a>
                    <hr class="navbar-divider" style="background-color: rgb(211, 219, 217);"><br><br>
                </div>
      
              </div>
            </div>
          </div>
        </div>

      </div>
    </nav>