<?php


require 'PHPMailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = "smtp.1and1.es";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "info@navarradeveloper.com";
//Password to use for SMTP authentication
$mail->Password = "N4vd3v%7";
//Set who the message is to be sent from
$mail->setFrom('info@navarradeveloper.com', 'Mensaje Boda');
//Set an alternative reply-to address
$mail->addReplyTo('mleizajer@hotmail.com', 'Miguel Leizagoyen');
//Set who the message is to be sent to
$mail->addAddress('gloria.martinez.magallon@gmail.com', 'Gloria Martínez');
//Set the subject line
$mail->Subject = utf8_decode('Confirmación asistencia boda');
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(utf8_decode(implode("<br/>",$_POST)));
//Replace the plain text body with one created manually
$mail->AltBody = utf8_decode(implode("///",$_POST));
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}