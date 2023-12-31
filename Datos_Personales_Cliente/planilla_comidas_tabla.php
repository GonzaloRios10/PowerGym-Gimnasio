<?php

require("../conexion.php");

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body >
    
   
    
        <!--navbar-->
        <?php
            include('../menu/navbar_cliente.php');
        
        ?>
    
        <?php
        
            $consulta = "SELECT * FROM alimentos 
            WHERE (usuario_idusuario = $id_user 
            OR usuario_idusuario IS NULL)
            AND tipos_alimentos_idtipos_alimentos = 1";
            
            $resultado = mysqli_query($conex, $consulta) or
                die("Problemas en el SELECT: ".mysqli_error($conex));
            
            if ($resultado) {
        ?>
      
      <!--  Main -->
    
        <section class="section main-cliente">

        <div class="container " style=" border: solid 3px white;margin-top:120px;">
            <div >
                <a name="Enviar" href="../Datos_Personales_Cliente/formulario_comida.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                <h2 class="info "  >Planilla de comidas creadas</h2><br>

            </div>

            <div class="table-container animated zoomIn">

                <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Comida</th>
                            <th>Calorías (100grs.)</th>
                            <th>Grasa Totales</th>
                            <th>Hidratos</th>
                            <th>Proteínas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($resultado)) {
                        ?>
                        <tr>
                            <td  style="font-size:20px;font-weight: bold;">
                                <?php echo $row['idalimentos']?>  
                            </td>
                            <td style="font-size:20px;">
                                <?php echo $row['Nombre']?>
                            </td>
                            <td style="font-size:20px;">
                                <?php echo $row['Calorias']?>
                            </td>
                            <td style="font-size:20px;">
                                <?php echo $row['Grasas']?>
                            </td>
                            <td style="font-size:20px;">
                                <?php echo $row['Hidratos']?>
                            </td>
                            <td style="font-size:20px;">
                                <?php echo $row['Proteinas']?>
                            </td>
                            
                            <td  style="font-size:20px;"> 
                                <a  href="./modificar_comida_tabla.php?id=<?php echo $row['idalimentos']?>"class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>

                                <a href="#" class="is-ghost delete-comida" data-id="<?php echo $row['idalimentos']?>"><img src="../imagenes/borrar.png" alt=""></a>
                            </td>
                            <?php
                                }
                            ?>
                        </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                            <th >N°</th>
                            <th >Comida</th>
                            <th >Calorías (100grs.)</th>
                            <th >Grasa Totales</th>
                            <th >Hidratos</th>
                            <th >Proteínas</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
                <?php
                    }
                ?>
                <br>
                

                
            </div>
    


        </div> 
    
    
        
        </section>

        <script>
            $(document).ready(function() {
                $('.delete-comida').on('click', function(e) {
                    e.preventDefault();

                    var comidaId = $(this).data('id');
                    var row = $(this).closest('tr');

                    var confirmDelete = confirm('¿Estás seguro de que quieres eliminar esta comida?');

                    if (confirmDelete) {
                        $.ajax({
                            url: './eliminar_comida.php?id=' + comidaId,
                            method: 'GET',
                            success: function(response) {
                                response = response.trim();
                                
                                if (response === 'success') {
                                    row.remove();
                                    alert('La comida se ha eliminado correctamente.');
                                } else {
                                    alert('Error al eliminar la comida.');
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