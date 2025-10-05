<?php
// Include the PHPMailer library files.
// You need to install PHPMailer via Composer first: composer require phpmailer/phpmailer
// If not using Composer, you will need to manually include the files.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/Exception.php");
require("PHPMailer-master/src/SMTP.php");
// Create a new PHPMailer instance.
require_once('secrets.php');
function sendMail($rcpt,$subject,$message, $ignore_headers=NULL) {

$mail = new PHPMailer(true);

    // Server settings
    //$mail->SMTPDebug = 2;                                   // Enable verbose debug output (for testing)
    $mail->isSMTP();                   
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));
                         // Set mailer to use SMTP
    $mail->Host       = EMAIL_HOST;                 // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                               // Enable SMTP authentication
    $mail->Username   = EMAIL_USER;           // SMTP username
    $mail->Password   = EMAIL_PASSWORD;                    // SMTP password
    $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                // TCP port to connect to

    // Recipients
    $mail->setFrom(EMAIL_ADDRESS, 'Blastenblaster');
    $mail->addAddress($rcpt, $rcpt);     // Add a recipient
    $mail->addReplyTo(EMAIL_ADDRESS, 'Blastenblaster');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
}
?>

