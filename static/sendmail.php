<?php
//require 'PHPMailerAutoload.php';

//require_once 'vendor/autoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ventas@sumteccorp.com';                 // SMTP username
$mail->Password = 'sumtec123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('ventas@sumteccorp.com', 'Landings SUMTEC');
//$mail->addAddress('sheyla@electo.pe');     // Add a recipient
$mail->addAddress('news@sumteccorp.com');   

//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->CharSet = 'UTF-8';
$mail->Subject = $landing;
$mail->Body    = 'Un nuevo registro con los siguientes datos:<br>';
$mail->Body   .= "--------- <br>";
$mail->Body   .= "<strong>Empresa: </strong> $empresa <br>";
$mail->Body   .= "<strong>RUC: </strong> $ruc <br>";
$mail->Body   .= "<strong>Nombre: </strong> $nombre <br>";
$mail->Body   .= "<strong>Apellido: </strong> $apellido <br>";
$mail->Body   .= "<strong>Cargo: </strong> $cargo <br>";
$mail->Body   .= "<strong>Teléfono: </strong> $telefono <br>";
$mail->Body   .= "<strong>Email: </strong> $email <br>";
$mail->Body   .= "<strong>Landing: </strong> $landing <br>";
$mail->Body   .= "<strong>Source: </strong> $source <br>";
$mail->Body   .= "<br><br>";
$mail->Body   .= "---------";



//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
//    echo 'Message has been sent';
}