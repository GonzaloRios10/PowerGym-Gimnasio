<?php

include'../conexion.php';

session_start(); 

$usuario = $_SESSION['UsuarioClien']; 
if (isset($_SESSION['UsuarioClien'])) {
}else{
header('location: ../Inicio_Sesion/login.php');
}
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
    </head>
    <body >
    
   
    
        <!--navbar-->
        <?php
            include('../menu/navbar_cliente.php');
    
            //session start--> required//
        
        ?>
    
      
      
      <!--  Main -->
    
        <section class="section main-cliente">

        <div class="container " style=" border: solid 3px white;margin-top:120px;">
            <div >
                <a name="Enviar" href="../menu/menu_cliente.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                <h2 class="info "  >Planilla de Rutinas</h2><br>

            </div>

        


            <div class="table-container animated zoomIn">

                <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
                    <thead>
                        <tr>

                            <th >N°Rutina</th>
                            
                            <th >Fecha</th>
                            <th >Músculo</th>
                            <th >Ejercicios</th>
                            <th >Series</th>
                            <th >Repeticiones</th>
                            <th>Calorías Quemadas</th>
                        
                                

                        
                        
                        </tr>
                    </thead>

                    <tbody>
<?php

$session_usuario = $_SESSION['UsuarioClien'];

$consulta = mysqli_query($conex, "SELECT * FROM usuario WHERE Usuario = '".$session_usuario."'");

/*   $id = $_SESSION['UsuarioClien']; */
$resultado = mysqli_fetch_array($consulta);

$sql5 = "SELECT idEjerciciosRutinas, usuario.Nombre, usuario.Apellido, rutina.fecha_ruti, grupo_muscular.Musculo,rutina_idRutina,
GROUP_CONCAT( ejercicios.Nombre_eje ORDER BY ejercicios.Nombre_eje SEPARATOR '<br> * ') AS ejercicios,
GROUP_CONCAT( ejercicios.calorias_quemadas ORDER BY ejercicios.calorias_quemadas SEPARATOR '<br> * ') AS calorias,
GROUP_CONCAT( ejerciciosrutina.series ORDER BY ejerciciosrutina.series SEPARATOR '<br> * ') AS series,
GROUP_CONCAT( ejerciciosrutina.repeticiones ORDER BY ejerciciosrutina.repeticiones SEPARATOR '<br> * ') AS repeticiones,
rutina.estado_rutina
FROM ejerciciosrutina
inner join rutina on ejerciciosrutina.rutina_idRutina = rutina.idRutina
INNER JOIN usuario ON rutina.usuario_idusuario = usuario.idusuario
INNER JOIN ejercicios ON ejerciciosrutina.ejercicios_idEjercicios = ejercicios.idEjercicios 
INNER JOIN grupo_muscular ON ejercicios.grupo_muscular_idGrupo_Muscular = grupo_muscular.idGrupo_Muscular
   WHERE rutina.usuario_idusuario = '".$resultado[0]."' 
GROUP BY rutina.fecha_ruti, grupo_muscular.Musculo,rutina.idRutina
ORDER BY rutina.fecha_ruti ASC, grupo_muscular.Musculo ASC;";

$query5 = mysqli_query($conex, $sql5);
$previo_fecha = "";
$previo_musculo = "";
while ($row = $query5->fetch_assoc()) {
?>
<tr>
    <td style="font-size: 20px; font-weight: bold;"><?php echo $row['idEjerciciosRutinas']; ?></td>
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
        <div>
            <?php
          
                echo "<li style='color: black; font-size: 20px;'>" . $row["calorias"] . "</li>";
            
            ?>
        </div>
    </td>
    
</tr>
<?php } ?>
</tbody>
                    <tfoot>
                    <tr>
                        <th >N°Rutina</th>
                        <th >Fecha</th>
                        <th >Músculo</th>
                        <th >Ejercicios</th>
                        <th >Series</th>
                        <th >Repeticiones</th>
                        <th>Calorías Quemadas</th>
                    


                        
                        
                        </tr>
                    </tfoot>
                </table>
    
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