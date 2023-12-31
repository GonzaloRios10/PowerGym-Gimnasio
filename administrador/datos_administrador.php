<?php

include("../conexion.php");

session_start(); 

$usuario = $_SESSION['UsuarioAdmin'];

if (isset($_SESSION['UsuarioAdmin'])) {

?>
<!DOCTYPE html>
<html>
  <head>
    <?php
        include('./head.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./js/ajax.js"></script>
    <script type="text/javascript" src="./js/datosUsuario.js"></script>
    </head>
    <body >
        <!--navbar-->
        <?php
            include('../menu/navbar_admin.php');
        ?>
        <?php
              }else{
                header('location: ../Inicio_Sesion/login.php');
              }
            ?>
      <!--  Main -->    
        <section class="section main-login">            
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="../menu/menu_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info"  >Planilla de Administrador</h2><br> 
                </div>
                <div class="table-container animated zoomIn">
                    <table class="table  is-fullwidth display "  id="tabla_admin" style="border-radius: 20px;" >
                        <thead>
                            <tr>
                                <th>N° Administrador</th>
                                <th >Administrador</th>
                                <th >Documento</th>
                                <th >Fecha de Nacimiento</th>
                                <th >Teléfono</th>
                                <th >Domicilio</th>
                                <th >Fecha de entrada</th>
                                <th >Acciones</th>                            
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>N° Administrador</th>
                            <th >Administrador</th>
                            <th >Documento</th>
                            <th >Fecha de Nacimiento</th>
                            <th >Teléfono</th>
                            <th >Domicilio</th>
                            <th >Fecha de entrada</th>
                            <th >Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
            </div>        
        </section>
        <hr class="shadow">
        <footer class="footer">
            <?php
             include('../footer/footer.php')
            ?>
         </footer> 
         <script src="../lib/jquery.min.js"></script>               
    <script src="../lib/jquery.dataTables.min.js"> </script>
    <script src="../lib/datatables.min.js"></script>
    <script>
            $(document).ready(function () {
                $('#example').DataTable({
                language: espanol
                });
            });
            let espanol={
        "autoFill": {
            "cancel": "Cancelar",
            "fill": "Llenar las celdas con <i>%d<i><\/i><\/i>",
            "fillHorizontal": "Llenar las celdas horizontalmente",
            "fillVertical": "Llenar las celdas verticalmente"
        },
        "decimal": ",",
        "emptyTable": "No hay datos disponibles en la Tabla",
        "infoFiltered": "Filtrado de _MAX_ entradas totales",
        "infoThousands": ".",
        "lengthMenu": "Mostrar _MENU_ entradas",
        "loadingRecords": "Cargando...",
        "paginate": {
            
            "first": "Primera",
            "last": "Ultima",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Busqueda:",
        "searchBuilder": {
            "add": "Agregar condición",
            "button": {
                "0": "Constructor de búsqueda",
                "_": "Constructor de búsqueda (%d)"
            },
            "clearAll": "Quitar todo",
            "condition": "Condición",
            "conditions": {
                "date": {
                    "after": "Luego",
                    "before": "Luego",
                    "between": "Entre",
                    "empty": "Vacio",
                    "equals": "Igual"
                }
            },
            "data": "Datos",
            "deleteTitle": "Borrar regla de filtrado",
            "leftTitle": "Criterio de alargado",
            "logicAnd": "Y",
            "logicOr": "O",
            "rightTitle": "Criterio de endentado",
            "title": {
                "0": "Constructor de búsqueda",
                "_": "Constructor de búsqueda (%d)"
            },
            "value": "Valor"
        },
        "thousands": ".",
        "zeroRecords": "No se encontraron registros que coincidan con la búsqueda",
        "datetime": {
            "previous": "Anterior",
            "next": "Siguiente",
            "hours": "Hora",
            "minutes": "Minuto",
            "seconds": "Segundo",
            "amPm": [
                "AM",
                "PM"
            ],
            "months": {
                "0": "Enero",
                "1": "Febrero",
                "10": "Noviembre",
                "11": "Diciembre",
                "2": "Marzo",
                "3": "Abril",
                "4": "Mayo",
                "5": "Junio",
                "6": "Julio",
                "7": "Agosto",
                "8": "Septiembre",
                "9": "Octubre"
            },
            "unknown": "-",
            "weekdays": [
                "Dom",
                "Lun",
                "Mar",
                "Mie",
                "Jue",
                "Vie",
                "Sab"
            ]
        },
        "editor": {
            "close": "Cerrar",
            "create": {
                "button": "Nuevo",
                "title": "Crear nueva entrada",
                "submit": "Crear"
            },
            "edit": {
                "button": "Editar",
                "title": "Editar entrada",
                "submit": "Actualizar"
            },
            "remove": {
                "button": "Borrar",
                "title": "Borrar",
                "submit": "Borrar",
                "confirm": {
                    "_": "Está seguro que desea borrar %d filas?",
                    "1": "Está seguro que desea borrar 1 fila?"
                }
            },
            "multi": {
                "title": "Múltiples valores",
                "info": "La selección contiene diferentes valores para esta entrada. Para editarla y establecer todos los items al mismo valor, clickear o tocar aquí, de otra manera conservarán sus valores individuales.",
                "restore": "Deshacer cambios",
                "noMulti": "Esta entrada se puede editar individualmente, pero no como parte de un grupo."
            },
            "error": {
                "system": "Ocurrió un error de sistema (&lt;a target=\"\\\" rel=\"nofollow\" href=\"\\\"&gt;Más información)."
            }
        },
        "aria": {
            "sortAscending": ": orden ascendente",
            "sortDescending": ": orden descendente"
        },
        "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
        "infoEmpty": "Mostrando 0 a 0 de 0 entradas"
    };
    </script>
    </body>
</html>