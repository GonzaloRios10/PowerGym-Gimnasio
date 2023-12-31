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
    
      <section class="section main-login" >
        <form action="" method="POST"  >
            <div class="container " style=" border: solid 3px white;;margin-top:80px;">
                <div class="buttons ">
                    <a name="Enviar" href="./Datos_Cuestionario_salud_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                </div>
                <h2 class="info" > Modificar Cuestionario de Salud</h2><br>
                <div class="field primero  ">

                       
                    
                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth" style="border-radius: 15px;">
                 
                           <tbody>
                           <tr class="Personalestr">
                                <td class="Personales">
                                    
                                    <label class="label">¿Ha tenido o tiene alguna lesión ósea?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="Certificado" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" >Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <div class="control">
                                            <input class="input is-rounded" type="text" name="lesion" placeholder="Breve descripción"  >
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label"> ¿Ha tenido o tiene alguna lesión muscular?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="Certificado" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" >Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <input class="input is-rounded" type="text" name="lesion_muscular" placeholder="Breve descripción"  >
                                    </div>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label"> ¿Padece alguna enfermedad cardiovascular?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="Certificado" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" >Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <input   name="cardiovascular"  class="input is-rounded"  type="text" placeholder="Breve descripción" >
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label"> ¿Padece de anemia en la actualidad?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="Certificado" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" >Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="label">En caso afirmativo, descríbalo brevemente:</label>
                                    <div class="control">
                                        <input   name="cardiovascular"  class="input is-rounded"  type="text" placeholder="Breve descripción" >
                                    </div>
                                </td>
                                
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">¿Se afixia con facilidad al realizar ejercicio físico?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="Certificado" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" >Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">¿Ha estado inscrito en algún gimnasio o instalación deportiva?</label>
                                    <div class="control">
                                        <div class="select" >
                                            <select  name="Certificado" >
                                                <option hidden>Elija una opción</option>
                                                <option value="1" >Si</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Personalestr">
                                <td class="Personales">
                                    <label class="label">Peso:</label>
                                    <div class="control">
                                        <input    class="input is-rounded" name="Peso" type="number"  placeholder="Ingrese el Peso" >
                                    </div>
                                </td>
                                <td class="Personales">
                                    <label class="label">Altura:</label>
                                    <div class="control">
                                        <input    class="input is-rounded" name="Alturo" type="number"  placeholder="Ingrese la Altura" >
                                    </div>
                                </td>
                            </tr>
                           </tbody>
                        </table>
                    </div>

                    <div class="table-container animated zoomIn ">
                        <table class="table is-fullwidth " style="border-radius:15px ;">
                            <thead>
                                <p class="parrafo" style="color:white">¿Es Usted?</p>
                            </thead>
                            <tbody >

                                <tr class="enfermedad">
                                    <td>
                                        <label class="label checkbox">
                                            <input type="checkbox" value="Asmatico" name="checkbox[]">
                                            Asmático/a
                                        </label>
                                    </td>

                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="Epiletico" name="checkbox[]">
                                            Epilético/a
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="Diabetico" name="checkbox[]">
                                            Diabético/a
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="Fumador" name="checkbox[]">
                                            Fumador/a
                                        </label>
                                    </td>
  
                                </tr>
                                <tr class="enfermedad">
                                    
                                    <td>
                                        <label class="label  checkbox">
                                            <input  type="checkbox" value="NINGUNA" name="checkbox[]">
                                            Ninguna
                                        </label>
                                    </td>
                                </tr>
       
                             
                            </tbody>
                        </table>    
                    </div>
                    <div class="table-container animated zoomIn">
                        <table class="table is-fullwidth " style="border-radius:15px ;">
                            <thead>
                                <p class="parrafo" style="color:white">Indique si ha tenido alguno de estos síntomas al realizar esfuerzos o ejercicio físico.</p>
                            </thead>
                            <tbody >

                                <tr class="enfermedad">
                                    <td>
                                        <label class="label checkbox">
                                            <input type="checkbox" value="Mareos" name="checkbox[]">
                                            Mareos
                                        </label>
                                    </td>

                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="Desmayos" name="checkbox[]">
                                            Desmayos o Lipotimias
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="Nauseas" name="checkbox[]">
                                            Naúseas
                                        </label>
                                    </td>
                                    <td>
                                        <label class="label checkbox">
                                            <input  type="checkbox" value="Respirar" name="checkbox[]">
                                            Dificultad para respirar
                                        </label>
                                    </td>
  
                                </tr>
                                <tr class="enfermedad">
                                    
                                    <td>
                                        <label class="label  checkbox">
                                            <input  type="checkbox" value="Ninguna" name="checkbox[]">
                                            Ninguna
                                        </label>
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