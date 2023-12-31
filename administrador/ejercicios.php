
<!DOCTYPE html>
<html>
  <head>
    <?php
      include('./head.php');
    ?>
    <link rel="stylesheet" href="./tabla.css">
    <link rel="stylesheet" href="./ejercicio.css">
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
            <h2 class="info "  >Planilla de Ejercicios</h2><br>
        </div>


        <div class="table-container ">

            <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
            <thead>
                <tr class="thead_">

                    <th >N°</th>
                    <th >Músculo</th>
                    <th>Ejercicio</th>
                    <th>Descripción</th>
                    <th>Calorias Quemadas
                        (cal/min)</th>
                    <th>Imagen</th>
                    <th >Creador</th>
                        

                
                
                </tr>
            </thead>

            <tbody>


                <tr >
                    <td  class="thead_"><b>1</b></td>
                    <td  id="descripcion">Abdomen</td>
                    <td  id="descripcion">Elevación de piernas</td>
                    <td  id="descripcion"><p id="descripcion"> Como su nombre indica, este ejercicio consiste en elevar las piernas bien desde una posición de tumbado boca arriba o bien colgado de una barra. Así, se produce una flexión de cadera al elevar las piernas manteniendo éstas juntas y la columna lo más estable y recta posible.</p></td>
                    <td id="descripcion" > 6</td>
                    <td  style=" width: 150px;height: 150px;"><img src="../imagenes/elevacion_de_piernas.png"  alt=""></td>
                    <td  id="descripcion" style="font-size:20px;"><p  id="descripcion">Maximo Fegundis</p></td>

                    
                </tr>
                

                <tr >
                    <td  class="thead_"><b>2</b> </td>
                    <td  id="descripcion">Biceps</td>
                    <td id="descripcion">Curl Martillo </td>
                    <td  ><p id="descripcion"> El curl martillo es uno de los ejercicios más conocidos dentro del mundo del fitness. Es un movimiento ideal para desarrollar la zona central del bíceps y el antebrazo. Es bastante parecido al curl bíceps original, pero cambiando la posición de las muñecas. </p></td>
                    <td id="descripcion" > 12</td>
                    <td  style=" width: 150px;height: 150px;"><img src="../imagenes/Martillo-cruzado.jpg"  alt=""></td>
                    <td id="descripcion" style="font-size:20px;"><p  id="descripcion">Maximo Fegundis</p></td>
                </tr>

                
                <tr >
                    <td class="thead_"><b>3</b></td>
                    <td id="descripcion">Biceps</td>
                    <td id="descripcion">Curl Inclinado con Mancuernas</td>
                    <td  style="font-size:15px;"><p id="descripcion"> Ejecución: Hacer el curl con una mancuerna volviendo la palma hacia arriba y afuera sin mover el codo. Al final de la repetición la palma debe estar situada ligeramente hacia fuera. Contraer el bíceps contando uno y, a continuación, bajar la mancuerna de regreso hacia abajo. Repetir con el otro brazo alternándolos.</p></td>
                    <td id="descripcion" > 8</td>
                    <td  style=" width: 150px;height: 150px;"><img src="../imagenes/Curl_Inclinado_con_Mancuernas.jpg"  alt=""></td>
                    <td id="descripcion"  style="font-size:20px;"><p  id="descripcion">Armando Casas</p></td>
                    
                </tr>
                <tr >
                    <td  class="thead_"><b>4</b></td>
                    <td  id="descripcion">Pecho</td>
                    <td id="descripcion">Flexiones convencionales</td>
                    <td  ><p id="descripcion"> Se colocan las cuatro extremidades en el suelo, con las manos separadas a una distancia mayor que la de los hombros. Se forma una línea recta entre los talones y los hombros y se contraen los abdominales lo más firmemente posible, manteniéndolos así durante toda la ejecución del ejercicio.</p></td>
                    <td id="descripcion"> 15</td>
                    <td  style=" width: 150px;height: 150px;"><img src="../imagenes/Flexiones_convencionales.jpg"  alt=""></td>
                    <td id="descripcion"  style="font-size:20px;"><p  id="descripcion">Emanuela Suares</p></td></td>
                    
                </tr>
                <tr >
                    <td  class="thead_"><b>5</b></td>
                    <td  id="descripcion">Pecho</td>
                    <td  id="descripcion">Mariposa</td>
                    <td    >
                    <p id="descripcion"> 
                        Los codos deben caer justo por debajo de los hombros (la parte superior de los brazos no debe estar más arriba que paralela al piso) y el límite del estiramiento apenas debe pasar el pecho. Una vez en posición, contrae tus pectorales para juntar las almohadillas frente a tu pecho.
                    </p>
                         
                    </td>
                    <td  id="descripcion" > 10</td>
                    <td  style=" width: 150px;height: 150px;"><img src="../imagenes/pecho_mariposa.jpg"  alt=""></td>
                    <td style="font-size:20px;"><p  id="descripcion">Armando Casas</p></td>

                    
                </tr>
               

                    
                </tr>
            </tbody>
            <tfoot>
            <tr class="thead_">
                    <th >N°</th>
                    <th >Músculo</th>
                    <th>Ejercicio</th>
                    <th>Descripción</th>
                    <th>Calorias Quemadas
                        (cal/min)</th>
                    <th>Imagen</th>
                    <th >Creador</th>


                
                
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
  <script>
    const fileInput = document.querySelector('#file-js-example input[type=file]');
    fileInput.onchange = () => {
        if (fileInput.files.length > 0) {
        const fileName = document.querySelector('#file-js-example .file-name');
        fileName.textContent = fileInput.files[0].name;
        }
    }
    </script>
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