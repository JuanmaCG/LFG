<?php

ob_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = "smtp.gmail.com";                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'lbpalana@gmail.com';                     // SMTP username
    $mail->Password   = 'killzome1';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], 'LFG Info');
    $mail->addAddress('lbpalana@gmail.com', $_POST['username_mail']);     // Add a recipient
    $mail->addAddress($_POST['email'], 'Information');               // Name is optional
//    $mail->addReplyTo($_POST['email'], 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

//    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'LFG INFO';
    $mail->Body    = $_POST['mensaje_mail']." <br>Mensaje enviado por </br>".$_POST['email'];
    $mail->AltBody = $_POST['mensaje_mail'];

    $mail->send();
    header("location: ../views/landing.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

ob_end_flush();