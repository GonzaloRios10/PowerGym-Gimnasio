
<!DOCTYPE html>
<html>
  <head>
    <?php
      include('./head.php');
    ?>
  </head>
  <body>
    <!--Navbar-->
    
    <?php
      include('../menu/navbar_admin.php');  
    ?>

    <!--/navbar-->

  <!---->      
  <section class="section main-login">

            
    <div class="container " style=" border: solid 3px white;margin-top:120px;">
        <div >
            <a name="Enviar" href="../menu/menu_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
            <h2 class="info "  >Informes de Músculos</h2><br>
        </div>


        <div class="table-container ">

            <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
            <thead>
                <tr>

                    <th >N°</th>
                    <th >Nombre</th>
                    <th>Creador</th>
                        

                
                
                </tr>
            </thead>

            <tbody>


                <tr >
                    <td  style="font-size:20px;font-weight: bold;">1</td>
                    <td  style="font-size:20px;">Abdomen</td>
                    <td  style="font-size:20px;">Maximo Fegundis</td>
           
                    
                </tr>
                

                <tr >
                    <td  style="font-size:20px;font-weight: bold;">2</td>
                    <td  style="font-size:20px;">Biceps</td>
                    <td  style="font-size:20px;">Maximo Fegundis</td>
          
                    
                </tr>

                
                <tr >
                    <td  style="font-size:20px;font-weight: bold;">3</td>
                    <td  style="font-size:20px;">Espalda</td>
                    <td  style="font-size:20px;">Maximo Fegundis</td>
                

                    
                </tr>
                <tr >
                    <td  style="font-size:20px;font-weight: bold;">4</td>
                    <td  style="font-size:20px;">Pecho</td>
                    <td  style="font-size:20px;">Maximo Fegundis</td>
                  

                    
                </tr>
                <tr >
                    <td  style="font-size:20px;font-weight: bold;">5</td>
                    <td  style="font-size:20px;">Piernas</td>
                    <td  style="font-size:20px;">Armando Casas</td>
          
                    
                </tr>
                <tr >
                    <td  style="font-size:20px;font-weight: bold;">6</td>
                    <td  style="font-size:20px;">Hombros</td>
                    <td  style="font-size:20px;">Emanuela Suares</td>
                 

                    
                </tr>
                <tr >
                    <td  style="font-size:20px;font-weight: bold;">7</td>
                    <td  style="font-size:20px;">Triceps</td>
                    <td  style="font-size:20px;">Armando Casas</td>
     

                    
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <th >N°</th>
                <th >Nombre</th>
                <th>Creador</th>


                
                
                </tr>
            </tfoot>
            </table>


            
        </div>


       
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