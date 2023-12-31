<?php

include("../conexion.php");

session_start(); 

?>

<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


    <?php

    $consulta = "SELECT * FROM mensaje_contacto";

    $resultado = mysqli_query($conex, $consulta);

    if($resultado) {

    ?>

    <!--  Main -->

    <section class="section main-login">


        <div class="container " style=" border: solid 3px white;margin-top:120px;">
            <div>
                <a name="Enviar" href="../menu/menu_administrador.php" class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                    <h2 class="info">Mensajes</h2><br>

            </div>




            <div class="table-container animated zoomIn">

                <table class="table  is-fullwidth display " id="example" style="border-radius: 20px;">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Cliente</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Asunto</th>
                            <th>Estado</th>
                            <th>Ampliar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($resultado)) {
                        ?> 
                        <tr>
                            <td  style="font-size:20px;"><b><?php echo $row['idmensaje_contacto']?></b></td>
                            <td  style="font-size:20px;"><?php echo $row['NombreCompleto']?></td>
                            <td  style="font-size:20px;"><?php echo $row['Correo']?></td>
                            <td  style="font-size:20px;"><?php echo $row['Celular']?></td>
                            <td  style="font-size:20px;"><?php echo $row['Asunto']?></td>
                            </td>
                            <td data-cell="Mensaje" style="text-align: center;">
                                <a href="#" class="is-ghost delete-mensaje" data-id="<?php echo $row['idmensaje_contacto']?>"><img src="../imagenes/borrar.png" alt=""></a>
                            </td>
                            <td data-cell="Mensaje" style="text-align: center;">
                                <a name="mensaje" href="mensajes_contact2.php?id=<?php echo $row['idmensaje_contacto']?>" class="is-ghost "><img src="../imagenes/ampliar_mensaje.png" alt=""></a>
                            </td>
                            <?php
                            }
                        ?>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>N°</th>
                            <th>Cliente</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Asunto</th>
                            <th>Estado</th>
                            <th>Ampliar</th>
                        </tr>
                    </tfoot>
                </table>
                <?php
                }
            ?>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.delete-mensaje').on('click', function(e) {
                    e.preventDefault();

                    var mensajeId = $(this).data('id');
                    var row = $(this).closest('tr');

                    var confirmDelete = confirm('¿Estás seguro de que quieres eliminar esta mensaje?');

                    if (confirmDelete) {
                        $.ajax({
                            url: './eliminar_mensaje.php?id=' + mensajeId,
                            method: 'GET',
                            success: function(response) {
                                response = response.trim();
                                
                                if (response === 'success') {
                                    row.remove();
                                    alert('El mensaje se ha eliminado correctamente.');
                                } else {
                                    alert('Error al eliminar el mensaje.');
                                }
                            },
                            error: function() {
                                alert('Error al comunicarse con el servidor.');
                            }
                        });
                    }
                });
            });
        </script>

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
        $(document).ready(function() {
            $('#example').DataTable({
                language: espanol
            });
        });
        let espanol = {
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