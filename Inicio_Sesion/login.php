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
              <span class="logo_Empresa">Nuestra Empresa</span>
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
            Iniciar Sesión
          </h1>
          <form method="POST" action="procesar_login.php" class="box form-login" onSubmit="return validar_ingreso();">
            <figure class="image is-128x128 animated zoomIn" style="display:block;margin:auto;">
              <img  src="../imagenes/pesa.png" >
            </figure>
            <div >
              <label class="label  animated zoomIn" style="color: white;font-size: 25px;">Usuario:</label>
              <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded  animated zoomIn" type="text" name="usuario" placeholder="Nombre de usuario">
                <span class="icon is-small is-left animated zoomIn">
                  <ion-icon name="person-sharp"></ion-icon>
                </span>
              </p>
            </div>
    
            <div class="field">
              <label class="label  animated zoomIn" style="color: white;font-size: 25px;">Contraseña:</label>
              <p class="control has-icons-left">
                <input class="input is-rounded animated zoomIn" type="password" name="clave" placeholder="Clave de acceso">
                <span class="icon is-small is-left animated zoomIn">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>
            <div class="field" >
              <p class="control" >
              <input class="button is-warning is-rounded" type="submit" name="btningresar" value="Iniciar"> 
              <!-- <button class="button is-warning is-rounded "  name="btningresar" type="submit"><b>Iniciar</b></button> -->
              </p>
              <br>
              <a href="../inscribirme/formulario.php" class="animated zoomIn" style="color:white;">¿Todavia no te inscribiste?</a><br>
              
              <a  class="animated zoomIn" href="./olvidaste_contra.php" style="color:white;">¿Olvidaste la Contraseña?</a>
            </div>  
     
          </form>
        </section>

        <script>
        function validar_ingreso() {
         var datos = document.getElementById('datos').value;
           if (datos == ""){
              alert("Los campos estan vacios");
              return false;
          }
        } 
        </script> 

        <!-- <div class>
          <a href="../menu/menu_cliente.php"  style="color:white;">Entrar como Cliente</a> <br>
          <a href="../menu/menu_profesor.php"  style="color:white;">Entrar como Profesor</a>
        </div> -->
      </div>
     
      


















   
    <hr class="shadow">
    <footer class="footer">
      <?php
        include('../footer/footer.php');
      ?>
    </footer> 

	</body>
</html>