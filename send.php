<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'morelia.gonzales.v@gmail.com';
  $mail->Password = 'nkhgxindbudyhjyy';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('morelia.gonzales.v@gmail.com');
  $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);
  $mail->Subject = '';
  $mail->Body = $body;
  
  $mail->send();

  echo "
  <script>
  document.location.href='TestPersonalidad.html';
  </script>
  "."Sent Successfully";
}
?>