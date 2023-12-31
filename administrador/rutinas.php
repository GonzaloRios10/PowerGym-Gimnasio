<!DOCTYPE html>
<html>
  <head>
    <?php
        include('./head.php');
    ?>
    
    </head>
    <body >
    
   
    
        <!--navbar-->
        <?php
            include('../menu/navbar_admin.php');
        
        ?>
    
      
      
      <!--  Main -->
    
        <section class="section main-login">

            
            <div class="container " style=" border: solid 3px white;margin-top:120px;">
                <div >
                    <a name="Enviar" href="../menu/menu_administrador.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info "  >Informes de Rutinas</h2><br>
  
                </div>

           


                <div class="table-container animated zoomIn">

                    <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
                        <thead>
                            <tr>

                                <th >N°</th>
                                <th >Cliente</th>
                                <th >Fecha</th>
                                <th >Músculo</th>
                                <th >Ejercicios</th>
                                <th >Series</th>
                                <th >Repeticiones</th>
                                <th>Calorías Quemadas</th>
                                <th>Estado</th>
                                <th >Creador</th>
                                    

                            
                            
                            </tr>
                        </thead>

                        <tbody>

                            <tr >
                                <td style="font-size:20px;font-weight: bold;">1</td>
                                <td  style="font-size:20px;">Juan Carlos</td>
                                <td  style="font-size:20px;">1/05/2023</td>
                                <td  style="font-size:20px;">Pecho</td>
                                <td  style="font-size:20px;">
                                    <div style=" display: block;">
                                        <li style="color:black;font-size:15px;">Flexiones convencionales</li>
                                        <li style="color:black;font-size:15px;">Mariposa</li>
                                        <li style="color:black;font-size:15px;">Press inclinado con barra</li>

                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">3</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                    </div>
                                </td>
                                <td style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">20</li>
                                        <li style="color:black;font-size:20px;">12</li>
                                        <li style="color:black;font-size:20px;">12</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                   80
                                </td>
                                <td   style="font-size:20px;"> 
                                    <img src="../imagenes/En_proceso.png" >
                                </td>
                                

                        
                                <td  style="font-size:20px;">Maximo Fegundis</td>         
                                
                            </tr>
                            <tr >
                                <td  style="font-size:20px;font-weight: bold;">2</td>
                                <td  style="font-size:20px;">Juan Carlos</td>
                                <td  style="font-size:20px;">1/05/2023</td>
                                <td  style="font-size:20px;">Biceps</td>
                                <td  style="font-size:20px;">
                                    <div style=" display: block;">
                                        <li style="color:black;font-size:15px;">Curl Martillo</li>
                                        <li style="color:black;font-size:15px;">Curl Inclinado con Mancuernas</li>

                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">4</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">12</li>
                                        <li style="color:black;font-size:20px;">12</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    65
                                </td>
                                <td   style="font-size:20px;"> 
                                    <img src="../imagenes/En_proceso.png" >
                                </td>
                                

                        
                                <td  style="font-size:20px;">Maximo Fegundis</td>         
                                
                            </tr>
                            <tr >
                                <td  style="font-size:20px;font-weight: bold;">3</td>
                                <td  style="font-size:20px;">Maria Verllot</td>
                                <td  style="font-size:20px;">1/05/2023</td>
                                <td  style="font-size:20px;">Pierna</td>
                                <td  style="font-size:20px;">
                                    <div style=" display: block;">
                                        <li style="color:black;font-size:15px;">Sentadilla</li>
                                        <li style="color:black;font-size:15px;">Prensa</li>
                                        <li style="color:black;font-size:15px;">Puente de glúteos</li>

                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">4</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">15</li>
                                        <li style="color:black;font-size:20px;">15</li>
                                        <li style="color:black;font-size:20px;">15</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    50
                                </td>

                                <td   style="font-size:20px;"> 
                                    <img src="../imagenes/terminado.png" >
                                </td>
                        
                        
                                <td  style="font-size:20px;">Armando Casas</td>   
                                
                            </tr>
                            

                            <tr >
                                <td  style="font-size:20px;font-weight: bold;">4</td>
                                <td  style="font-size:20px;">Juan Carlos</td>
                                <td  style="font-size:20px;">29/04/2023</td>
                                <td  style="font-size:20px;">Espalda</td>
                                <td  style="font-size:20px;">
                                    <div style=" display: block;">
                                        <li style="color:black;font-size:15px;">Remo invertido</li>
                                        <li style="color:black;font-size:15px;">Remo con mancuerna a una mano</li>
                                        <li style="color:black;font-size:15px;">Remo con banda elástica</li>
                                        <li style="color:black;font-size:15px;">Pull over con banda elástica.</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">4</li>
                                        <li style="color:black;font-size:20px;">3</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                        <li style="color:black;font-size:20px;">4</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    <div>
                                        <li style="color:black;font-size:20px;">20</li>
                                        <li style="color:black;font-size:20px;">20</li>
                                        <li style="color:black;font-size:20px;">20</li>
                                        <li style="color:black;font-size:20px;">20</li>
                                    </div>
                                </td>
                                <td  style="font-size:20px;">
                                    125
                                </td>
                                <td   style="font-size:20px;"> 
                                    <img src="../imagenes/terminado.png" >
                                </td>
                    

                        
                                <td  style="font-size:20px;">Armando Casas</td>          
                                
                            </tr>
                            

                        </tbody>
                        <tfoot>
                        <tr>
                            <th >N°</th>
                            <th >Cliente</th>
                            <th >Fecha</th>
                            <th >Músculo</th>
                            <th >Ejercicios</th>
                            <th >Series</th>
                            <th >Repeticiones</th>
                            <th>Calorías Quemadas</th>
                            <th>Estado</th>
                            <th >Creador</th>

                            
                            
                            </tr>
                        </tfoot>
                    </table>
                    <p><img src="../imagenes/En_proceso.png" ><span style="color:white;"> Creado  </span></p> 
                    <p><img src="../imagenes/terminado.png" ><span style="color:white;"> Finalizado</span></p> 
                   <br>
                    

                    
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