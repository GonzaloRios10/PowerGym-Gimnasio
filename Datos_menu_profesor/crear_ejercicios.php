
<!DOCTYPE html>
<html>
  <head>
    <?php
      include('./head.php');
      include('../conexion.php');
      //session necesario
    ?>
    <link rel="stylesheet" href="./tabla.css">
    <link rel="stylesheet" href="./ejercicio.css">
  </head>
  <body>
    <!--Navbar-->
    
    <?php
      include('../menu/navbar_profesor.php');  
    ?>

    <!--/navbar-->

  <!---->      
  <section class="section main-profesor">

            
    <div class="container " style=" border: solid 3px white;margin-top:120px;">
        <div >
            <a name="Enviar" href="../menu/menu_profesor.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
            <h2 class="info "  ><span ><u style="color:#f7f57d;">Crear</span ></u> Ejercicios</h2><br>
        </div>

        <div class="table-container">

        <form enctype="multipart/form-data" action="./guardar_ejercicio.php" method="POST" >
            <?php
            $sql="SELECT * FROM grupo_muscular"; 
            $query=mysqli_query($conex,$sql);
            ?>
                 
                 


                <div class="table-container " >
                    <table class="table is-fullwidth table_2" style="border-radius: 15px; ">

                        <tbody>
                            <tr>
                                
                                <td   class="td_ejercicio">
                                    <label class="label" style="font-size:25px;">Músculo:</label>
                                    <div class="control">
                                        <div class="select " >
                                            
                                            <select name="Musculo"> <?php while($row=mysqli_fetch_assoc($query)) { ?>
                                                <option hidden>Seleccione el Músculo</option>
                                                <option value="<?php echo $row['idGrupo_Muscular']; ?>"> <?php echo $row['Musculo'];?> </option>
                                                <?php }?>
                                            </select>
                                    </div>
                                </td>
                                <td  class="td_ejercicio"> 
                                    <div class="control">
                                        <label class="label"style="font-size:25px;">Nombre:</label>
                                        <input type="text" name="nombre_eje" class="input is-rounded" placeholder="Ingrese Nombre del Ejercicio"  style="color:black;" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_ejercicio" > 
                                    <label class="label" style="font-size:25px;">Descripción del Ejercicio:</label>
                                    <textarea class="textarea is-small" name="descripcion_eje"  placeholder="Ingrese una brebe descripción de como realizar el ejercicio"></textarea>

                                </td>
                                <td class="td_ejercicio"> 
                                    <label class="label" style="font-size:25px;"> Calorias quemadas:</label>
                                    <input type="number" class="input is-rounded" name="calo_quemadas" placeholder="Ingrese la cantidad de calorias que se quema por ejercicio "></input>

                                </td>
                          
                                
                            </tr>
                            <tr>
                                <td  class="td_ejercicio">
                                    <label class="label"style="font-size:25px;" >Imagen del Ejercicio:</label>
                                    <div id="file-js-example" class="file has-name  is-normal" >
                                        <label class="file-label">
                                            <input class="file-input" type="file" name="imagen">
                                            <span class="file-cta">
                                            <span class="file-icon">
                                            </span>
                                            <span class="file-label" style="color:black;">
                                                Subir Archivo...
                                            </span>
                                            </span>
                                            <span class="file-name" style="color:black;">
                                                Ningún archivo cargado
                                            </span>
                                        </label>
                                    </div>
                                </td>
                            </tr>

                        </body>
                    </table>
                    <div class="buttons ">
                        <button type="submit" name="Enviar"  class="button is-warning is-rounded"><b>Enviar</b></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="table-container ">

            <table class="table  is-fullwidth display "  id="example" style="border-radius: 20px;" >
            <thead>
                <tr class="thead_">

                    <th >N° Ejercicio</th>
                    <th >Músculo</th>
                    <th>Ejercicio</th>
                    <th>Descripción</th>
                    <th>Calorias Quemadas
                        (cal/min)</th>
                    <th>Imagen</th>
                    <th >Acciones</th>
                        

                
                
                </tr>
            </thead>

            <tbody>

                    <?php
                    $sql="SELECT idEjercicios,Nombre_eje,Musculo,descripcion_eje,calorias_quemadas,imagen 
                    FROM ejercicios
                    inner join grupo_muscular on ejercicios.grupo_muscular_idGrupo_Muscular = grupo_muscular.idGrupo_Muscular";
                    $query=mysqli_query($conex,$sql);
                    while($row=mysqli_fetch_assoc($query)){
                    ?>                                    
                <tr >
                    <td  class="thead_"><b><?php echo $row['idEjercicios'];?></b></td>
                    <td  id="descripcion"><?php echo $row['Musculo'];?></td>
                    <td  id="descripcion"><?php echo $row['Nombre_eje'];?></td>
                    <td  id="descripcion"><p id="descripcion"> <?php echo $row['descripcion_eje'];?> </p></td>
                    <td id="descripcion" > <?php echo $row['calorias_quemadas'];?> </td>
                    <td  style=" width: 150px;height: 150px;"><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"</td>
                    <td   >
                        <a name="Enviar" href="./modificar_ejercicio.php?id=<?php echo $row['idEjercicios']?>"  class="is-ghost "><img src="../imagenes/editar.png" alt=""></a>
                        <a name="Enviar" href="./borrar_ejercicio.php?id=<?php echo $row['idEjercicios']?>"  class="is-ghost "><img src="../imagenes/borrar.png" alt=""></a>
                    </td>      

                    
                </tr>
                
                <?php }?>
                
            </tbody>
            <tfoot>
            <tr class="thead_">
                    <th >N° Ejercicio</th>
                    <th >Músculo</th>
                    <th>Ejercicio</th>
                    <th>Descripción</th>
                    <th>Calorias Quemadas
                        (cal/min)</th>
                    <th>Imagen</th>
                    <th >Acciones</th>
                        


                
                
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