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
        include('./head.php')
        ?>
        <link rel="stylesheet" href="./estilos_rol.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="./js/ajax.js"></script>
        <script type="text/javascript" src="./js/datosUsuario.js"></script>
    </head>
    <body>
        <?php
            include('../menu/navbar_admin.php')        
        ?>    
         <?php
              }else{
                header('location: ../Inicio_Sesion/login.php');
              }
            ?>    
        <section class="section main-login">                
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="./datos_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info" >Cambiar Rol</h2><br>
                </div>
                <div class="table-container animated zoomIn">
                    <div class="box">                        
                        <div class="box">
                            <strong style="font-size:25px">Matrícula N°<?php echo $_GET['idUsuario']; ?> &nbsp;&nbsp;&nbsp; <?php echo $_GET['apellido']. ' '.$_GET['nombre']; ?></strong>
                        </div>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <form action="">
                                            <table class="table is-fullwidth" style="border-radius: 15px;">
                                                <body>
                                                    <tr>
                                                        <td>
                                                            <label class="label">Rol Asignado:</label>
                                                            <div class="control">
                                                                <input class="input is-rounded place" id="inputRol" type="text" placeholder="Administrador"  disabled>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="label">Cambiar</label>
                                                            <img src="../imagenes/cambiar.png" alt="">
                                                        </td>
                                                        <td>
                                                            <div class="control">
                                                                <div class="control">
                                                                    <label class="label">Nuevo Rol:</label>
                                                                    <div class="select " >
                                                                        <select name="Musculo" id="SelectRol">
                                                                            <option hidden>Seleccione el nuevo Rol</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </body>                                    
                                            </table>
                                            <div class="buttons ">
                                                <button type="button" id="btnEnviar" name="Enviar"  class="button is-warning is-rounded"><b>Guardar Cambios</b></button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </article>                        
                    </div>
                </div><br>
            </div> 
        </section>
        <hr class="shadow">
        <footer class="footer">
            <?php
            include('../footer/footer.php')
            ?>
        </footer>

        <script>
            $(function(){
                $('#btnEnviar').click(function() {
                    alert("Rol cambiado");
                    enviarRolCliente();
                });
                CargarTablaDatosCliente();
                CargarTablaDatosProfesores();
                CargarTablaDatosAdmin();
                selectRol();
            })

            $(function(){
                $('#SelectRol').change(function() {
                    $('#inputRol').val($('#SelectRol option:selected').text());
                });
            })            
            
            function selectRol(){
                _ajax.go(
                ({
                    function_response: onCargarSelectRol,
                    params: ({
                        accion: 'SelectRol',
                        SelectRol: $('#SelectRol').val(),
                    })
                })
                );
            }
                
            function onCargarSelectRol(data) {
                console.log(data);
                data = JSON.parse(data);       
                cargarSelectRol(data); 
            }

            function cargarSelectRol(data){
                console.log(data);
                var option = '';
                for (var i = 0; i < data.length; i++) {
                    option += '<option value="' + data[i]['idRol'] + '">  ' + data[i]['Rol'] + '</option>';
                }
                $('#SelectRol').append(option);
            }

            var idUsuario = "<?php echo $_GET['idUsuario']; ?>";
            var idRolSeleccionado
            $('#SelectRol').change(function() {
                idRolSeleccionado = $(this).val();
                console.log('idRol seleccionado:', idRolSeleccionado);
            });
            
            function enviarRolCliente(){
                _ajax.go(
                    ({
                        function_response: onEnviarRolCliente,
                        params: ({
                            accion: 'editarRol',
                            idUsuario: idUsuario,
                            rol: idRolSeleccionado,
                        })
                    })        
                );        
            }
            
            function onEnviarRolCliente(data) {
                console.log(data);
                data = JSON.parse(data);                
            }
        </script>
    </body>
</html>