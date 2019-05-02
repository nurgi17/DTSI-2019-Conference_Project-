<?php
require 'phpmail/PHPMailerAutoload.php';
$msg = 
$mail = new PHPMailer;                               // Enable verbose debug output
$mail->isMail();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '23mpu.wnz@gmail.com';                 // SMTP username
$mail->Password = 'futureKZ23MPUsalt';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->From = 'name@site.com';
$mail->addAddress('usen.nurgisa@gmail.com');               // Name is optional
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'SASP Contact Form';
$mail->Body = 'Hey!';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent!!!';
}
?>