<?php
include 'connection.php';

echo '<pre>';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'usemebattosai@gmail.com';                     //SMTP username
    $mail->Password   = 'dxiyqemfacciqnee';                               //SMTP password
    //$mail->Password   = '0809104606';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('usemebattosai@gmail.com', 'Mailer');
    $mail->addAddress($_POST['email'],$_POST['name']);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('usemebattosai@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Subscribe';
    $mail->Body    = 'Hello sir/madam'.'<br>'.'Hope you are in good condition , thank you for subscribing to our newsletter . We will notify you about emergency situations around your area at the earliest.'.'<br>'.'Thank You';
    $mail->AltBody = 'Thanks for subscrbing.';

    $mail->send();
    echo 'Message has been sent';
    header('location:index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}