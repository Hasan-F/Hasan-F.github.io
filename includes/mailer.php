<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\src\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\src\SMTP;


//require __DIR__ . "\PHPMailer\src\PHPMailer.php";

//require 'path/to/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\SMTP.php';


require __DIR__ . "/phpMyAdmin-5.2.1-all-languages/vendor/autoload.php";

$mail = new PHPMailer(true);

$mail->isSMTP();                                            //Send using SMTP
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->Username   = 'hasancarelick@gmail.com';                     //SMTP username
//$mail->From       = 'No Reply<noreply@gmail.com>';
$mail->Password   = 'wyym dddl ngii qjjv';                               //SMTP password

$mail->isHTML(true);

//echo "megatron";

return $mail;