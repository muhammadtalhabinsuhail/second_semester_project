<?php

    // Code to execute if the condition is true
    

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'srs.customer.suggestion@gmail.com';                     //SMTP username
    $mail->Password   = 'eztr vtdy vwmb qjqe';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('srs.customer.suggestion@gmail.com', 'SRS Costumer Care');
    $mail->addAddress('muhammadkabeer227@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('muhammadtalhabinsuhail@gmail.com');               //Name is optional
    // $mail->addReplyTo('muhammadkabeer227@gmail.com', 'Information');
    // $mail->addCC('');
    // $mail->addBCC('muhammadtalhabinsuhail@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_SESSION[ 'subject' ];
    $mail->Body    = "<b>Customer Name: </b>" .$_SESSION[ 'name' ] ."<br/><br/>" .
                     "<b>Customer Email: </b>" .$_SESSION[ 'email' ]."<br/><br/>" .
                     "<b>Customer Message: </b>" .$_SESSION[ 'message' ]."<br/><br/>" ;
    // $mail->AltBody = 'Design Frontend and backend ';

    $mail->send();
    header( 'Location: success.php' );
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>