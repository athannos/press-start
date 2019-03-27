<html>
    <head>
  <meta http-equiv='refresh' content='2; URL=http://www.press-start.es/index.php'>
</head>
<body>
    <h1> Correo enviado Correctamente. Volviendo... </h1>
<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\composer\vendor\autoload.php';

        $nombre=$_REQUEST['nombre']; // Get Name value from HTML Form
        $telefono=$_POST['telefono'];  // Get Mobile No
        $email=$_POST['email'];  // Get Email Value
        $mensaje=$_POST['mensaje']; // Get Message Value
    $cuerpo = 'De: '.$nombre."\n Tlf: ".$telefono."\nEmail: ".$email."\nMensaje:\n".$mensaje;
/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
   /* Remitente */
   $mail->setFrom('Administracion@press-start.es');

   /* Destinatario */
   $mail->addAddress('Administracion@press-start.es');

   /* Asunto */
   $mail->Subject = 'Correo Enviado desde la Web';

   /* Cuerpo del mensaje */
   $mail->Body = $cuerpo;

     /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.1and1.es';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'administracion@press-start.es';
   
   /* SMTP authentication password. */
   $mail->Password = 'Daniel_33';
   
   /* Set the SMTP port. */
   $mail->Port = 587;

   /* Finally send the mail. */
   $mail->send();
}

catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
?>
    </body>
</html>