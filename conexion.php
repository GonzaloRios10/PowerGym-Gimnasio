<?php

$conex = mysqli_connect('localhost','nnnnnnnnn','nnnnnnnnn','grupogca_gym');


$host = "localhost";
$bd="grupogca_gym";
$usuario="nnnnnnnnnn";
$contrasenia="nnnnnnnn";

mysqli_set_charset($conex, "utf8");

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}


/* $conex = mysqli_connect('localhost:3308','root','','gym');


$host = "localhost:3308";
$bd="gym";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
} */
?>


