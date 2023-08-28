<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$name = 'Henry College';
$email = 'info@hrmsystems.com.ng';
$subject = 'Sql Backup' .date('Y-m-d');
$message = "Hey Henry, here is today's backup for henry school";
$file= 'sqldump.sql';

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


    $mail = new PHPMailer(true);

try {
    $mail->isSMTP();                           
    $mail->Host       = 'mail.hrmsystems.com.ng';   
    $mail->SMTPAuth   = true;                          
    $mail->Username   = 'info@hrmsystems.com.ng';         
    $mail->Password   = 'emenike134';                      
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        
    $mail->Port       = 465; 
    $mail->setFrom($email,$name);
    $mail->addAddress('henrydevelopment2@gmail.com'); 
    $mail->addAttachment ($file);
  
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    =  "
        <html>
            <body>
                <P>
                    $message
                </P>

            </body>
        </html>
        ";
    $mail->AltBody = '';
    


    $mail->send();
   echo "sent";
    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>