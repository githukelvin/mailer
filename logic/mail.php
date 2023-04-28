<?php
declare(strict_types=1);

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;






//Load Composer's autoloader
require $root.'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($root);
$dotenv->load();
$G_KEY = $_ENV['G_KEY'];
$G_MAIL = $_ENV['G_MAIL'];
$G_HOST =$_ENV['G_HOST'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $G_HOST;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $G_MAIL;                     //SMTP username
    $mail->Password   = $G_KEY;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($details['email'], 'Mailer');
    
    $mail->addAddress($details['email']);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $details['subject'];
    $mail->Body    = $details['message'];

    $mail->send();
    echo "<div class='success' >Email was sent successfully</div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}