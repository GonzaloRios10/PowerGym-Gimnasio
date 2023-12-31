<?php

include("../conexion.php");

session_start(); 

?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <?php
            include('./head.php');
        ?>
    </head>

<body>
    <!--Navbar-->
    
    <?php
      include('../menu/navbar_profesor.php');  
    ?>

    <?php

    $id = $_GET['id'];

    $consulta = "SELECT * FROM usuario
    WHERE idusuario = '".$id."'";

    $resultado = mysqli_query($conex, $consulta);

    while ($registro = mysqli_fetch_assoc($resultado)) {

    ?>      

    <br>
    <section class="section main-clientes"> 
        <form action="modificar_usuario_password_profe.php" method="POST">
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    
                    <h2 class="info">Opciones de la cuenta</h2><br>
                </div>

                <div class="table-container animated zoomIn">
                    <div class="table-container">
                        <table class="table is-fullwidth " style="border-radius:15px ;">
                            <tbody >

                                <tr class="Personalestr">
                                    <td class="Personales">
                                        <label class="label">Usuario Actual</label>
                                        <div class="control">
                                            <input name="Usuario" class="input is-rounded place" type="text" placeholder="<?php echo $registro['Usuario']?>" disabled>
                                        </div>
                                    </td>
                                    <td class="Personales">
                                        <label class="label">Contraseña Actual</label>
                                        <div class="control">
                                            <input   name="pass"  class="input is-rounded place"  type="password" placeholder="*******" disabled>
                                        </div>
                                    </td>

                                    <input placeholder="Codigo" name="id" style="visibility:hidden;" value="<?php echo $registro['idusuario']?>">

                                    <td class="Personales">
                                        <label class="label">Nuevo Usuario:</label>
                                        <div class="control">
                                            <input name="user" class="input is-rounded"  type="text"  placeholder="Ingrese el nuevo usuario" >
                                        </div>
                                    </td>
                              
                                    <td class="Personales">
                                        <label class="label">Nueva contraseña:</label>
                                        <div class="control">
                                            <input name="password"  class="input is-rounded"  type="password" placeholder="Ingrese su nueva contraseña" >
                                        </div>
                                    </td>
                                </tr>
                            
                            
                            </tbody>
                        
                        </table>    
                        
                    </div>


            
                </div>
                <div class="buttons">
                    <button type="submit" name="Enviar"  class="button is-warning is-rounded"><b>Guardar Cambios</b></button>
                </div>
            </div>
        </form> 
        <br><br>

    <?php
    }
    ?>
    </section>


    <footer class="footer">
        <?php
            include('../footer/footer.php');
        ?>
    </footer> 
</body>
</html>