<!DOCTYPE html>
<html>
    <head>
        <?php
            include('./head.php');
            include'../conexion.php';
            session_start();
        ?>    
    </head>
    <body >   
        <!--navbar-->
        <?php
            include('../menu/navbar_profesor.php');       
        ?>      
      <!--  Main -->   
      <section class="section main-profesor">
           
<div class="container " style=" border: solid 3px white;margin-top:120px;">
    <div >
        <a name="Enviar" href="../menu/menu_profesor.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
        <h2 class="info "  >Planilla de Rutinas</h2><br>
    </div>

    <div class="table-container animated zoomIn">
    <table class="table is-fullwidth display" id="example" style="border-radius: 20px;">
    <thead>
        <tr>
        <th>N°Rutina</th>
        <th>Cliente</th>
        <th>Fecha</th>
        <th>Músculo</th>
        <th>Ejercicios</th>
        <th>Series</th>
        <th>Repeticiones</th>
        <th>Estado</th>
        <th>Acciones</th>
        </tr>
    </thead>

<tbody>
<?php
$sql5 = "SELECT idEjerciciosRutinas, usuario.Nombre, usuario.Apellido, rutina.fecha_ruti, grupo_muscular.Musculo,rutina_idRutina,
GROUP_CONCAT( ejercicios.Nombre_eje ORDER BY ejercicios.Nombre_eje SEPARATOR '<br> * ') AS ejercicios,
GROUP_CONCAT( ejerciciosrutina.series ORDER BY ejerciciosrutina.series SEPARATOR '<br> * ') AS series,
GROUP_CONCAT( ejerciciosrutina.repeticiones ORDER BY ejerciciosrutina.repeticiones SEPARATOR '<br> * ') AS repeticiones,
rutina.estado_rutina
FROM ejerciciosrutina
inner join rutina on ejerciciosrutina.rutina_idRutina = rutina.idRutina
INNER JOIN usuario ON rutina.usuario_idusuario = usuario.idusuario
INNER JOIN ejercicios ON ejerciciosrutina.ejercicios_idEjercicios = ejercicios.idEjercicios 
INNER JOIN grupo_muscular ON ejercicios.grupo_muscular_idGrupo_Muscular = grupo_muscular.idGrupo_Muscular
--    WHERE  -- AND rutina.estado_rutina = '1'
GROUP BY rutina.fecha_ruti, grupo_muscular.Musculo,rutina.idRutina
ORDER BY rutina.fecha_ruti ASC, grupo_muscular.Musculo ASC;";

$query5 = mysqli_query($conex, $sql5);
$previo_fecha = "";
$previo_musculo = "";
while ($row = $query5->fetch_assoc()) {
?>
<tr>
    <td style="font-size: 20px; font-weight: bold;"><?php echo $row['idEjerciciosRutinas']; ?></td>
    <td style="font-size: 20px;"><?php echo $row['Nombre']; echo " - "; echo $row['Apellido']; ?></td>
    <td style="font-size: 20px;"><?php echo $row['fecha_ruti']; ?></td>
    <td style="font-size: 20px;"><?php echo $row["Musculo"]; ?></td>
    <td style="font-size: 20px;">
        <div style="display: block;"><?php 
        echo "<li style='color: black; font-size: 20px;'>" . $row["ejercicios"] . "</li>";?>
        </div>
    </td>
    <td style="font-size: 20px;">
        <div>
            <?php
                echo "<li style='color: black; font-size: 20px;'>" . $row["series"] . "</li>";
            ?>
        </div>
    </td>
    <td style="font-size: 20px;">
        <div>
            <?php
                echo "<li style='color: black; font-size: 20px;'>" . $row["repeticiones"] . "</li>";            
            ?>
        </div>
    </td>
    <td style="font-size: 20px;">
        <?php if ($row['estado_rutina'] == 1) {
            echo '<img src="../imagenes/En_proceso.png">';
        } else {
            echo '<img src="../imagenes/terminado.png">';
        } ?>
    </td>
    <td style="text-align: center;">
        <a name="Enviar" href="./borrado_logico_listarRutinas.php?id= <?php echo $row['rutina_idRutina'] ; ?>" class="is-ghost"><b><img src="../imagenes/borrar.png" alt=""><?php ?></b></a>
    </td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr>
<th>N°Rutina</th>
<th>Cliente</th>
<th>Fecha</th>
<th>Músculo</th>
<th>Ejercicios</th>
<th>Series</th>
<th>Repeticiones</th>
<th>Estado</th>
<th>Acciones</th>
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