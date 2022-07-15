<?php  

session_start();

// Llamando a los campos
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];

// Datos para el correo
$destinatario = "parausosdev@gmail.com";
$asunto =  "Enviado por: ".$nombre; 

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";
// Enviando Mensaje

if(isset($_POST['envio'])){
     mail($destinatario, $asunto, $carta);
    $message = urlencode("After clicking the button, the form will submit to home.php. When, the page home.php loads, the previous page index.php is redirected. ");
    header("Location:".$_SERVER[HTTP_REFERER]."?message=".$message);


}
 ?>



