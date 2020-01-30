<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = strip_tags($_POST['yourname']);
$email = strip_tags($_POST['youremail']);
$message = strip_tags($_POST['message']);
$phone = strip_tags($_POST['yourphone']);
$subject = strip_tags($_POST['yoursubject']);

// Validation

if(empty($name)){
    header('location:index.php?error=name');
    exit();
}

if(empty($email)){
    header('location:index.php?error=email');
    exit();
}
if(empty($message)){
        header('location:index.php?error=message');
        exit();
}
if(empty($phone)){
    header('location:index.php?error=phone');
    exit();
}
if(empty($subject)){
    header('location:index.php?error=subject');
    exit();
}

function validateEMAIL($email) {
    $validate = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";

    return (bool)preg_match($validate, $email);
}
// Load Composer's autoloader PHPMAILER
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions PHPMAILER
$mail = new PHPMailer(true);

try {
    //Server settings PHPMAILER
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'SMTP.office365.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                 // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients PHPMAILER
    $mail->setFrom('jonne.paljakka@outlook.com', 'Joe User');
    $mail->addAddress('jonne.paljakka@outlook.com', 'Joe User');     // Add a recipient


    // Content PHPMAILER
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message from' .$name;

    // self made mod to php mailer
    $body = "
    You have received message from  .$name <br /> 
    Subject: $subject <br />
    Name: $name <br />
    Email: $email <br />
    Phone: $phone <br />
    Message: $message <br />

    ";
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
}   catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}