<?php 
include './server/conexion.php';

if (isset($_POST['Enviar'])) {
    $musculo = $_POST['musculo'];
    $sql = "INSERT INTO grupogca_gym.grupo_muscular (Musculo) VALUES ('$musculo')";
    $query = mysqli_query($conex, $sql);
    header('Location: crear_musculo.php');
    
}
?>