<?php 

include("../conexion.php");

$provincia = $_POST['provincia'];

$sql = "SELECT idLocalidad,
		Provincia_idProvincia,
		Nombre_Localidad 
		FROM localidad 
		WHERE Provincia_idProvincia = '$provincia' ORDER BY Nombre_Localidad";

$result = mysqli_query($conex, $sql);

$cadena = "<select id='lista2' name='lista2'>";

while ($ver = mysqli_fetch_row($result)) {
	$cadena = $cadena.'<option value='.$ver[0].'>'.($ver[2]).'</option>';
}

echo $cadena."</select>";
	

?>