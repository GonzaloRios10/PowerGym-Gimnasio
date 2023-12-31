<!DOCTYPE html>
<html>
<head>
    <?php
        include('./head.php');
        include '../conexion.php';
        session_start(); 
        
        if (isset($_SESSION['UsuarioClien'])) {
        }else{
            header('location: ../Inicio_Sesion/login.php');
        }
    ?>

    <link rel="stylesheet" href="./tabla_ver_rutina.css">
</head>
<body>
    <!--navbar-->
    <?php
    include('../menu/navbar_cliente.php');   
    ?>
 <?php
      
    ?>
    <!--  Main -->
    <section class="section main-clientes">
        <div class="container" style="border: solid 3px white;margin-top:120px;">
            <div>
                <a name="Enviar" href="../menu/menu_cliente.php" class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
                <h2 class="info">Ver Rutina</h2><br>
            </div>
            <div class="table-container">
                <table class="table" style="border-radius: 15px;">
                    <tbody>
                        <?php

                        $session_usuario = $_SESSION['UsuarioClien'];

                        $consulta = mysqli_query($conex, "SELECT * FROM usuario WHERE Usuario = '".$session_usuario."'");


                        $resultado = mysqli_fetch_array($consulta);
                        $_SESSION['idUsuario'] = $resultado[0];

                        $sql = "SELECT imagen, Musculo, Nombre_eje, descripcion_eje, series, repeticiones, calorias_quemadas, SUM(calorias_quemadas) AS total_calorias
                        FROM ejerciciosrutina
                        INNER JOIN ejercicios ON ejerciciosrutina.ejercicios_idEjercicios = ejercicios.idEjercicios
                        INNER JOIN grupo_muscular ON ejercicios.grupo_muscular_idGrupo_Muscular = grupo_muscular.idGrupo_Muscular
                        INNER JOIN rutina ON ejerciciosrutina.rutina_idRutina = rutina.idRutina
                        WHERE usuario_idusuario = $resultado[idusuario] AND estado_rutina = '1'
                        GROUP BY imagen, Musculo, Nombre_eje, descripcion_eje, series, repeticiones, calorias_quemadas";
                        $query = mysqli_query($conex, $sql);
                        if ($query && mysqli_num_rows($query) > 0) {
                            while ($row = $query->fetch_assoc()) {
                            ?>
                            <tr>
                                <div class="card">
                                    <div class="card-image">
                                        <figure>
                                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" style="border-radius: 15px;width:300px; height:200px;" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <h1><b><?php echo $row['Musculo']; ?> - <?php echo $row['Nombre_eje']; ?></b></h1>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <?php echo $row['descripcion_eje']; ?>
                                        </div>
                                        <p>Series: <span style="color:black;"><?php echo $row['series']; ?></span></p>
                                        <p>Repeticiones: <span style="color:black;"><?php echo $row['repeticiones']; ?></span></p>
                                    </div>
                                </div>
                            </tr><br>
                            <?php }} ?>
                    </tbody>
                </table>
                <?php
                $sql1="SELECT imagen, Musculo, Nombre_eje, descripcion_eje, series, repeticiones, calorias_quemadas, SUM(calorias_quemadas) AS total_calorias
                FROM ejerciciosrutina
                INNER JOIN ejercicios ON ejerciciosrutina.ejercicios_idEjercicios = ejercicios.idEjercicios
                INNER JOIN grupo_muscular ON ejercicios.grupo_muscular_idGrupo_Muscular = grupo_muscular.idGrupo_Muscular
                INNER JOIN rutina ON ejerciciosrutina.rutina_idRutina = rutina.idRutina
                WHERE usuario_idusuario = $resultado[idusuario] AND estado_rutina = '1'";
                $query1=mysqli_query($conex, $sql1);
                $row1=mysqli_fetch_assoc($query1);
                 ?>
                <p style="color:white;"><ion-icon name="information-circle"></ion-icon> La cantidad de Calorías Quemadas al realizar este tipo de Rutina es aproximadamente: <span style="font-size:25px;color:#f7f57d"><?php echo $row1['total_calorias']; ?></span></p> 
                <br>
                <form action="rutina_completada.php" method="post">
                    <div class="buttons">
                        <input type="hidden" name="estado" value="2">
                        <button type="submit" name="Completado" class="button is-warning is-rounded"><b>Completado</b></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <hr class="shadow">
    <footer class="footer">
        <?php
        include('../footer/footer.php');
        ?>
    </footer>
</body>
</html>