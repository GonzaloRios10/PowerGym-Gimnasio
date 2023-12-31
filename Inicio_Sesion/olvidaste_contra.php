<?php

include("../conexion.php");
  


?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre Empresa</title>
    <script defer src="../bulma/bulma.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bulma/bulma.min.css">
    <script src="https://kit.fontawesome.com/dd0442ec5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../normalize.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	</head>
  	<body>

      <section >
      
      <nav class="navbar is-fixed-top is-black has-shadow " style="border-radius: 0px 0px 30px 30px;" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <div class="logo">
          <b>
            <p>
              <span class="logo_Empresa"> Nuestra Empresa</span>
            </p> 
          </b>
        </div>
      
      
        <a role="button" class="navbar-burger animated tada" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          
          <a class="navbar-item enlaces_navbar" href="../index.html">
            <b>Inicio</b>
          </a>
          <a class="navbar-item enlaces_navbar " href="../Quienes_Somos/quienes_somos.php">
            <b> Quienes Somos</b>
          </a>
      
      
          <div class="navbar-item has-dropdown is-hoverable " >
            <a class="navbar-link enlaces_navbar">
              <b>Más</b>
            </a>
            <div class="navbar-dropdown is-boxed" >
              <a class="navbar-item" href="../inscribirme/formulario.php" >
                <b >Inscribirme</b>
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="../contactanos/contactanos.php" >
                <b>Contactános</b>
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                <b>Reportar un error</b>
              </a>
            </div>
          </div>
          </b>
        </div>
      
        <div class="navbar-end">

          </div>
        </div>
      </div>
      </nav>



      <div class=".container.is-widescreen  main-login">
        <section class="section ">
          <h1 class="title is-1 sesion" style="color: white;">
            Olvide la Contraseña
          </h1>

          <form action="recuperar_password.php" method="POST" class="box form-login"  >
            <figure class="image is-128x128 animated zoomIn" style="display:block;margin:auto;">
              <img  src="../imagenes/pesa.png" >
            </figure>
            <div >
              <label class="label  animated zoomIn" style="color: white;font-size: 25px;">Dirección de correo electrónico:</label>
              <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded  animated zoomIn" type="email" name="correo_electronico" placeholder="Correo electrónico">
                <span class="icon is-small is-left animated zoomIn">
                    <ion-icon name="mail"></ion-icon>
                </span>
              </p>
            </div>
    
            <br>
            <div class="field" >
              <p class="control" >
              <button class="button is-warning is-rounded animated zoomIn"  name="Iniciar" type="submit"><b>Siguiente Paso</b></button>
              </p>
            </div>  
          </form>
        </section>
        <br><br><br><br>
      </div>
     
  
   
    <hr class="shadow">
    <footer class="footer">
      <?php
        include('../footer/footer.php');
      ?>
    </footer> 

	</body>
</html>