<?php

include("../conexion.php");

session_start(); 

$correo = $_SESSION['correo_electronico'];

$sql = "SELECT Nombre, Password FROM usuario WHERE Email = '".$correo."' ";
$resultado = mysqli_query($conex, $sql); //envia la consulta a la bd
$usuario = mysqli_fetch_assoc($resultado); //obtiene los valores de la filas
$nombreUsuario = $usuario['Nombre'];
$passwordUsuario = $usuario['Password'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gimnasio.proyecto2023@gmail.com';                     //SMTP username
    $mail->Password   = 'ojjtirgijcpxngfh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('gimnasio.proyecto2023@gmail.com', 'Gimnasio');
    $mail->addAddress($correo, $nombreUsuario);     //Add a recipient

    unset($_SESSION['correo_electronico']);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->CharSet = 'UTF-8'; 	// Establecer la codificación a UTF-8

    $mail->Subject = 'Recuperar Contraseña';
    $mail->Body    = 'Tu contraseña temporal es: <b>'.$passwordUsuario.'</b>';

    $mail->send();
    echo 'Message has been sent';
    header('location:olvidaste_contra.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>	