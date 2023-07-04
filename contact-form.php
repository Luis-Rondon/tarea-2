<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
  
    
    $to = $email; 
    $from = " ";

   
    $subject = "Nuevo mensaje de contacto";
    $content = "Nombre: $name\n";
    $content .= "Email: $email\n";
    $content .= "Teléfono: $phone\n";
    $content .= "Mensaje:\n$message";
  
    $mail = new PHPMailer(true);
  
    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com'; 
      $mail->SMTPAuth = true;
      $mail->Username = ' '; 
      $mail->Password = ' '; 
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      $mail->setFrom($from);
      $mail->addAddress($to);
  
      $mail->Subject = $subject;
      $mail->Body = $content;
  
      $mail->send();
  
      echo '<div style="background-color: #c7f3d9; color: #008000; padding: 10px; margin-bottom: 10px;">¡Gracias por contactarnos! Pronto nos pondremos en contacto contigo.</div>';
} catch (Exception $e) {
  
  echo '<div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 10px;">Ha ocurrido un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</div>';
}
}
?>