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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
  </head>
  <body>
    <!-- Navbar -->
    <?php
      include('../menu/navbar_cliente.php');
    ?>

    <!-- Main Cliente -->
    <section class="section main-cliente">
        <div class="container" style="border: solid 3px white;margin-top:120px;">
        <div>
            <a name="Enviar" href="../menu/menu_cliente.php" class="is-ghost">
                <b>
                    <ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon>
                </b>
            </a>
          <h2 class="info">Planilla de Nutrición</h2><br>
        </div>

        <div class="table-container">
          <form action="" method="POST" id="formulario_fecha">
              <div class="table-container">
                  <table class="table is-fullwidth" style="border-radius: 15px;">
                      <tbody>
                          <tr class="Personalestr">
                              <td class="Personales">
                                  <div class="field is-horizontal">
                                      <div class="field-label is-normal">
                                          <label class="label">Fecha</label>
                                      </div>
                                      <div class="field-body">
                                          <div class="field">
                                              <p class="control">
                                                  <input type="date" class="input is-rounded" name="fecha" style="color:black;">
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="buttons">
                      <button type="submit" name="Enviar" class="button is-warning is-rounded"><b>Enviar</b></button>
                  </div>
              </div>
          </form>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $Fecha = $_POST['fecha'];
          $consulta_comidas = mysqli_query($conex, "SELECT *, (alimentos.Calorias*alimentos_usuario.Cantidad_Gramos) AS Subtotal
            FROM alimentos, alimentos_usuario
            WHERE (alimentos.idalimentos = alimentos_usuario.alimentos_idalimentos
            AND alimentos_usuario.usuario_idusuario = $id_user 
            AND DATE(alimentos_usuario.fecha) = '$Fecha'
            OR alimentos_usuario.usuario_idusuario IS NULL)
            AND tipos_alimentos_idtipos_alimentos = 1");

          $consulta_bebidas = mysqli_query($conex, "SELECT *, (alimentos.Calorias*alimentos_usuario.Cantidad_Gramos) AS Subtotal
            FROM alimentos, alimentos_usuario
            WHERE (alimentos.idalimentos = alimentos_usuario.alimentos_idalimentos
            AND alimentos_usuario.usuario_idusuario = $id_user 
            AND DATE(alimentos_usuario.fecha) = '$Fecha'
            OR alimentos_usuario.usuario_idusuario IS NULL)
            AND tipos_alimentos_idtipos_alimentos = 2");

            $total_calorias = 0;
            $total_grasas = 0;
            $total_hidratos = 0;
            $total_proteinas = 0;

        if (mysqli_num_rows($consulta_comidas) > 0 || mysqli_num_rows($consulta_bebidas) > 0) {
        ?>

        <div class="table-container">
            <h2 class="info">Comidas</h2><br>
            <table class="table is-fullwidth" style="border-radius: 15px;">
            <thead>
              <tr>
                <th>Comida</th>
                <th>Calorías(grs)</th>
                <th>Grasas</th>
                <th>Hidratos</th>
                <th>Proteínas</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="tabla_alimentos">
              <?php
              while ($row = mysqli_fetch_array($consulta_comidas)) {
                $id_comida = $row['idalimentos'];
                $consulta_comida = mysqli_query($conex, "SELECT * FROM `alimentos` WHERE `idalimentos` = '".$id_comida."'");
                $row_comida = mysqli_fetch_array($consulta_comida);

                $total_calorias += $row_comida['Calorias'];
                $total_grasas += $row_comida['Grasas'];
                $total_hidratos += $row_comida['Hidratos'];
                $total_proteinas += $row_comida['Proteinas'];

                ?>
                <tr class="fila-alimento" data-id="<?php echo $row['idalimentos']; ?>">
                  <td> <?php echo $row_comida['Nombre']; ?></td>
                  <td class="calorias"><?php echo $row_comida['Calorias']; ?></td>
                  <td class="grasas"><?php echo $row_comida['Grasas']; ?></td>
                  <td class="hidratos"><?php echo $row_comida['Hidratos']; ?></td>
                  <td class="proteinas"><?php echo $row_comida['Proteinas']; ?></td>
                  <td>
                    <a href="#" class="is-ghost" onclick="eliminarFila('<?php echo $row['idalimentos']; ?>')">
                      <img src="../imagenes/borrar.png" alt="Eliminar">
                    </a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
            </table>
        </div>

        <div class="table-container">
            <h2 class="info">Bebidas</h2><br>
            <table class="table is-fullwidth" style="border-radius: 15px;">
            <thead>
              <tr>
                <th>Bebida</th>
                <th>Calorías(mls)</th>
                <th>Grasas</th>
                <th>Hidratos</th>
                <th>Proteínas</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody id="tabla_alimentos">
              <?php
              while ($row = mysqli_fetch_array($consulta_bebidas)) {
                $id_bebida = $row['idalimentos'];
                $consulta_bebida = mysqli_query($conex, "SELECT * FROM `alimentos` WHERE `idalimentos` = '".$id_bebida."'");
                $row_bebida = mysqli_fetch_array($consulta_bebida);

                $total_calorias += $row_bebida['Calorias'];
                $total_grasas += $row_bebida['Grasas'];
                $total_hidratos += $row_bebida['Hidratos'];
                $total_proteinas += $row_bebida['Proteinas'];

                ?>
                <tr class="fila-alimento" data-id="<?php echo $row['idalimentos']; ?>">
                  <td><?php echo $row_bebida['Nombre']; ?></td>
                  <td class="calorias"><?php echo $row_bebida['Calorias']; ?></td>
                  <td class="grasas"><?php echo $row_bebida['Grasas']; ?></td>
                  <td class="hidratos"><?php echo $row_bebida['Hidratos']; ?></td>
                  <td class="proteinas"><?php echo $row_bebida['Proteinas']; ?></td>
                  <td>
                    <a href="#" class="is-ghost" onclick="eliminarFila('<?php echo $row['idalimentos']; ?>')">
                      <img src="../imagenes/borrar.png" alt="Eliminar">
                    </a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
            </table>
        </div>

        <div class="table-container">
            <h2 class="info">Totales</h2><br>
            <table class="table is-fullwidth" style="border-radius: 15px;">
            <thead>
              <tr>
                <th>Total Calorías</th>
                <th>Total Grasas</th>
                <th>Total Hidratos</th>
                <th>Total Proteínas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="total-calorias"><?php echo $total_calorias; ?></td>
                <td id="total-grasas"><?php echo $total_grasas; ?></td>
                <td id="total-hidratos"><?php echo $total_hidratos; ?></td>
                <td id="total-proteinas"><?php echo $total_proteinas; ?></td>
              </tr>
            </tbody>
            </table>
        </div>
        <?php
        } else {
                echo '<p>No se encontraron resultados para la fecha seleccionada.</p>';
            }
        }
        ?>
        </div>
    </div>
    </section>

    <script>
        const fechaInput = document.getElementById('fecha');
        const formulario = document.getElementById('formulario_fecha');
        fechaInput.addEventListener('change', function() {
            formulario.submit();
        });
    </script>

    <script>
        // Función para eliminar una fila de la tabla y actualizar los totales
        function eliminarFila(id) {
        // Eliminar la fila de la tabla
        const fila = document.querySelector(`tr[data-id="${id}"]`);
        fila.remove();
        // Actualizar los totales
        actualizarTotales();
        }

        // Función para actualizar los totales
        function actualizarTotales() {
           // Obtener todas las filas de comidas en la tabla
           const filasAlimentos = document.querySelectorAll('.fila-alimento');

            // Inicializar los totales
            let totalCalorias = 0;
            let totalGrasas = 0;
            let totalHidratos = 0;
            let totalProteinas = 0;

            // Calcular los totales sumando los valores de cada fila
            filasAlimentos.forEach((fila) => {
              const calorias = parseInt(fila.querySelector('.calorias').textContent);
              const grasas = parseInt(fila.querySelector('.grasas').textContent);
              const hidratos = parseInt(fila.querySelector('.hidratos').textContent);
              const proteinas = parseInt(fila.querySelector('.proteinas').textContent);

              totalCalorias += calorias;
              totalGrasas += grasas;
              totalHidratos += hidratos;
              totalProteinas += proteinas;
            });

            // Actualizar las celdas de los totales con los nuevos valores
            document.getElementById('total-calorias').textContent = totalCalorias;
            document.getElementById('total-grasas').textContent = totalGrasas;
            document.getElementById('total-hidratos').textContent = totalHidratos;
            document.getElementById('total-proteinas').textContent = totalProteinas;
          }

          // Actualizar los totales inicialmente
          actualizarTotales();
    </script>

    <!-- Footer -->
    <hr class="shadow">
  <footer class="footer">
      <?php
      include('../footer/footer.php')
      ?>
  </footer> 

    <!-- Scripts -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="../lib/datatables.min.js"></script>
    <script src="../lib/funciones.js"></script>
    <script src="../lib/fontawesome.min.js"></script>
  </body>
</html>
