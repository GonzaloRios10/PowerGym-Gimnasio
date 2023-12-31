<?php

include("../conexion.php");

session_start();

$session_usuario = $_SESSION['UsuarioClien'];
$consulta = mysqli_query($conex, "SELECT idusuario FROM usuario WHERE Usuario = '".$session_usuario."'");
$resultado = mysqli_fetch_array($consulta);
$id_user = $resultado['idusuario'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre Empresa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script defer src="../bulma/bulma.js"></script>
    <link rel="stylesheet" href="../bulma/bulma.min.css">
    <script src="https://kit.fontawesome.com/dd0442ec5c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../lib/datatables.min.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="./estilos_cliente_data.css">
    <link rel="stylesheet" href="./menu_cliente.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
    </head>
    <body >
    
   
    
        <!--navbar-->
        <?php

            include('../menu/navbar_cliente.php');
        
        ?>
    
      
      
      <!--  Main -->
    
        <section class="section main-cliente">

        <div class="container " style=" border: solid 3px white;margin-top:120px;">
            <div >
                <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                <h2 class="info "  >Formulario de Bebidas</h2><br>

            </div>

            <div class="table-container animated zoomIn">
   
                <form action="registro_bebida_usuario.php" method="POST">
                    <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
                        <tbody>
                                <tr>
                                    <td data-cell="Comida" style="font-size:20px;">
                                        <label class="label">Bebida:</label>
                                        <div class="control">
                                            <div class="control">
                                                <div class="select" >
                                                <select name="Bebidas" id="mySelect">
                                                <?php
                                                    $consulta = "SELECT * FROM alimentos 
                                                    WHERE (usuario_idusuario = $id_user OR usuario_idusuario IS NULL)
                                                    AND tipos_alimentos_idtipos_alimentos = 2";
                                                    $ejecutar = mysqli_query($conex, $consulta);
                                                ?>

                                                <?php
                                                    while($row = mysqli_fetch_array($ejecutar)){
                                                    $id = $row['idalimentos'];
                                                    $desc_bebida = $row['Nombre'];
                                                ?>

                                                    <option value="<?php echo $id?>">
                                                        <?php echo $desc_bebida?>    
                                                    </option>
                                                  
                                                <?php
                                                    }
                                                ?>
                                                    <option disabled="true" selected="true" value="0">Seleccione la Bebida
                                                    </option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    <td>
                                        <label class="label"><label class="label"><ion-icon name="search-sharp"></ion-icon>Buscar Bebida</label></label>
                                        <div class="control">
                                            <!--  -->
                                            <input type="text" class="input is-rounded " placeholder="Ingrese el nombre de la Comida, Luego seleccione" id="myInput" style="color:black;" onkeyup="filterOptions()" >
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td style="font-size:20px;">
                                        <label class="label">Calorías (100 Gramos):</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="number" id="cantidadCalorias" placeholder="Cantidad de Calorías" disabled>
                                        </div>
                                    </td>
                                    <td  style="font-size:20px;">
                                        <label class="label">Cantidad (100 Gramos):</label>
                                        <input class="input is-rounded " type="number" name="gramos" step="0.01" required placeholder="Cantidad en Gramos">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td style="font-size:20px;">
                                        <label class="label">Hidratos:</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="number" id="cantidadHidratos" placeholder="Cantidad de Hidratos" disabled>
                                        </div>
                                    </td>
                                    <td style="font-size:20px;">
                                        <label class="label">Proteinas:</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="number" id="cantidadProteinas" placeholder="Cantidad de Proteinas" disabled>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="font-size:20px;">
                                        <label class="label">Grasas:</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="number" id="cantidadGrasas" placeholder="Cantidad de Grasas" disabled>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="font-size:20px;">
                                        <label class="label">Fecha:</label>
                                        <div class="control">
                                            <input class="input is-rounded" type="date" name="fecha_usuario" placeholder="Fecha" required>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <div class="buttons ">
                        <button type="submit" name="Enviar" class="button is-warning is-rounded"><b>Cargar</b></button>
                    </div>
                </form><br>
                
               <p style="color:white;"> <ion-icon name="information-circle"></ion-icon> Si la comida no esta en la lista selecionada puedes dar de alta.</p>
                <a  href="./crear_alta_bebidas.php"  class="is-ghost "><b><p style="color:#f7f57d;"><img src="../imagenes/comida.png" alt=""> Crear </p></b></a>
                <p style="color:white;"> <ion-icon name="information-circle"></ion-icon> En el caso de que se haya cargado mal algún dato del formulario de comidas, puede Modificar/Borrar.</p>
                <a  href="./planilla_bebidas_tabla.php"  class="is-ghost "><b><p style="color:#f7f57d;"><img src="../imagenes/editar_comida.png" alt=""> Modificar </p></b></a>
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
            // Obtengo el elemento del select, en este caso la comida
            var selectComida = document.getElementById("mySelect");
            
            // Obtengo los elementos input adicionales mediante su id
            var inputCantidadCalorias = document.getElementById("cantidadCalorias");
            var inputCantidadHidratos = document.getElementById("cantidadHidratos");
            var inputCantidadProteinas = document.getElementById("cantidadProteinas");
            var inputCantidadGrasas = document.getElementById("cantidadGrasas");

            // Agrego un evento onchange al select
            selectComida.onchange = function() {

                // Obtengo el valor seleccionado del select
                var idComidaSeleccionada = selectComida.value;

                // Realizo una petición AJAX para obtener los valores de calorías, hidratos, proteínas y grasas
                var request = new XMLHttpRequest();
                request.open('GET', 'obtener_cantidad_bebidas.php?idBebida=' + idComidaSeleccionada, true);

                request.onload = function() {
                    // Obtengo la respuesta y actualizo los valores de los inputs mencionados
                    // anteriormente
                    var valores = JSON.parse(request.responseText);
                    inputCantidadCalorias.value = valores.calorias;
                    inputCantidadHidratos.value = valores.hidratos;
                    inputCantidadProteinas.value = valores.proteinas;
                    inputCantidadGrasas.value = valores.grasas;
                };

                request.send();
            };
        </script>

        <script>
            function filterOptions() {
            // Obtener el valor del campo de búsqueda
            var input = document.getElementById("myInput");
            var filter = input.value.toUpperCase();

            // Obtener el select y las opciones
            var select = document.getElementById("mySelect");
            var options = select.getElementsByTagName("option");

            // Recorrer todas las opciones y ocultar las que no coincidan con el texto de búsqueda
            for (var i = 0; i < options.length; i++) {
                var text = options[i].textContent || options[i].innerText;
                if (text.toUpperCase().indexOf(filter) > -1) {
                options[i].style.display = "";
                } else {
                options[i].style.display = "none";
                }
                }
            }
        </script>

         <!-- <script src="../lib/jquery.min.js"></script>               
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
    </script> -->
    </body>
</html>