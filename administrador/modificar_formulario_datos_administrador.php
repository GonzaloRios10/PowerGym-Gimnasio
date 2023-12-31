<!DOCTYPE html>
<html>
    <head>
        <?php
            include('./head.php');
        ?>
    </head>
  <body>
    
   
    
    <!--navbar-->
    <?php
        include('../menu/navbar_admin.php');
    
    ?>
    
      
      
      <!--                                                        Main                                -->
    
      <section class="section  main-login" >
        <form action="" method="POST"  >
            <div class="container " style=" border: solid 3px white;margin-top:80px;">
                <div >
                    <a name="Enviar" href="./datos_personales_administrador.php"  class=" is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info">Modificar Datos Personales</h2><br>
                </div>
    
                <div class="field primero  ">


                    <div class="table-container animated zoomIn" >
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                            <tbody>
                                 <tr class="Personalestr">
                                <td class="Personales" >
                                    
                                    <div class="control">
                                        <label class="label">Apellidos:</label>
                                        <input  class="input is-rounded " type="text" name="Apellido" placeholder="Ingrese el Apellido" required>
                                    </div>
                                </td>
                                <td class="Personales">
                                    
                                    <div class="control">
                                        <label class="label">Nombres:</label>
                                        <input class="input is-rounded" type="text" name="Nombre" placeholder="Ingrese los Nombres" required>
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr  class="Personalestr">
                                <td >
                                    
                                    <div class="control">
                                        <label class="label">Fecha de Nacimiento:</label>
                                        <input class="input is-rounded" name="FechaNacimiento" type="date" required>
                                    </div>
                                </td>
                                

                                <td class="Personales">

                                    <label class="label">Sexo:</label>
                                    <div class="control">
                                        <div class="control">
                                            <div class="select" >
                                                <select   name="sexo_anal">
                                                   <option  value="3" hidden>Seleccione el sexo</option>
                                                   <option value="1">Mujer</option>
                                                   <option value="2">Hombre</option>
                                                   <option value="3">Otros</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td  class="Personales">
                                    <label class="label">Estado Civil:</label>
                                    <div class="control">
                                        <div class="control">
                                            <div class="select" >
                                                <select   name="EstadoCivil">
                                                   <option  value="3" hidden>Seleccione el Estado Civil</option>
                                                   <option value="1">Soltero</option>
                                                   <option value="2">Casado</option>
                                                   <option value="3">Otros</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
 
                                <td  class="Personales">
                                    <label class="label">Lugar:</label>
                                    <div class="control">
                                        <input  class="input is-rounded" type="text" name="LugarNacimiento" placeholder="Ingrese Lugar de Nacimiento" required>
                                    </div>
                        
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td  class="Personales">
 
                                    <label class="label">Localidad:</label>
                                    <div class="control">
                                        <input  class="input is-rounded" type="text" name="Localidad" placeholder="Ingrese la Localidad" required>
                                    </div> 

                                </td>
                                <td  class="Personales">
   
                                    <label class="label">Provincia:</label>
                                    <div class="control">
                                        <input class="input is-rounded" type="text" name="Provincia" placeholder="Ingrese la Provincia" required>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td  class="Personales">
                 
                                    <label class="label">Código Postal:</label>
                                    <div class="control">
                                        <input    class="input is-rounded" name="C_Postal" type="text"  placeholder="Ingrese el Código Postal" >
                                    </div>
                                    <td class="Personales">

                                        <label class="label">D.N.I.:</label>
                                        <div class="control">
                                            <input  class="input is-rounded" type="text" name="Documento" placeholder="Ingrese el DNI (sin puntos)" required>
                                        </div>
                                    </td>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Teléfono:</label>
                                    <div class="control">
                                        <input    class="input is-rounded" name="Telefono" type="text"  placeholder="Ingrese el Teléfono" >
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Correo Electrónico:</label>
                                    <div class="control">
                                        <input    class="input is-rounded" name="Correo" type="email"  placeholder="Ingrese el Teléfono" >
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                           
                        </table>
                    </div>
                    
                    
    

                </div>
                <div class="buttons ">
                    <button type="submit" name="Enviar"  class="button is-warning is-rounded"><b>Guardar Cambios</b></button>
                </div>
     
            </div>
            
        </form>
        <br>

    </section>
    <hr class="shadow">
    <footer class="footer">
        <?php
            include('../footer/footer.php')
        ?>
    </footer> 

  </body>
</html>