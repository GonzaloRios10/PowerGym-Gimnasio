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
    <link rel="stylesheet" href="styles_Contactanos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  </head>
  <body >
 
    <nav class="navbar is-fixed-top is-black has-shadow" style="border-radius: 0px 0px 30px 30px;" role="navigation" aria-label="main navigation">
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
                  <b>Inscribirme</b>
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item" >
                  <b>Contactános</b>
                </a>
                
              </div>
            </div>
            </b>
          </div>
        
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
    
                <a class="button  is-warning  is-rounded buton_iniciar"  href="../Inicio_Sesion/login.php" >
                  <span style="color:black;">Iniciar Sesión</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        </nav>
        

    <div class=".container.is-widescreen  main-login" > 
      <div class="hero-body " >
        <div class="content " style="margin-top: 80px;" >

            <h1 class="logo_contac" style="color: white;"> Contacta<span class="contac">Nos</span></h1>

            <div class="contact-wrapper animated fadeInDown" style="border-radius:30px ;border: solid 3px white;margin-top: 80px;">
              <div class="contact-form">
           
                <form action="enviar_mensaje.php" method="POST">
                    <p>
                        <label>Nombre Completo</label>
                        <input type="text" name="Nombre" placeholder="Ingrese Nombre Completo">
                    </p>
                    <p>
                        <label>Correo</label>
                        <input type="email" name="Correo" placeholder="Ingrese Correo">
                    </p>
                    <p>
                        <label>Celular</label>
                        <input type="tel" name="Celular" placeholder="Ingrese el Número de Celular">
                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" name="Asunto" placeholder="Ingrese el Título del Asunto">
                    </p>
                    <p class="block">
                    <label>Descripción</label> 
                        <textarea name="Descripcion" placeholder="Describa la Situación" ></textarea>
                    </p>
                   
                    <div class="buttons" style="margin:20px ;">
                      <button type="submit" name="Enviar" class="button is-warning is-rounded"><b>Enviar</b></button>
                    </div>
                   
                </form>
              </div>
              
          </div>
        </div>
      </div>
    </div>

      <hr class="shadow">
      <footer class="footer">
        <?php
          include('../footer/footer.php')
        ?>
      </footer> 


  </body>
</html>
