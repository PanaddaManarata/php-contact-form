<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

if(isset($_POST)){
//get var from form
    $clientName = $_POST['nameClient']; 
    $clientEmail = $_POST['email']; 
    $clientMessage = $_POST['message']; 
    $client_subject = $_POST['subject']; 

    $mail_subject = "<em>subject : $client_subject </em><br><br> <hr>";
    $mail_body = "$mail_subject Hi, you have a new message from <b>$clientName</b> <br><br><br> $clientMessage";

//What if empty? 

if(empty($clientName)){
   echo "<em>fill in your name </em>";
    exit; 
   
}
else if(empty($clientEmail)){
    echo "<em>fill in your email </em>";
    exit; 
    
}
else if(empty($clientMessage)){
    echo "<em>fill in your message </em>";
    exit; 
    
}
else{
    $mail; 
}

//sanitize 


$clean_email = filter_var($clientEmail,FILTER_SANITIZE_EMAIL);
if (filter_var($clean_email, FILTER_VALIDATE_EMAIL)){
  $mail; 
}
else{
    echo "<em>no valid email</em> ";
}

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
            
    $mail->isSMTP();                                             // Set mailer to use SMTP
    $mail->Host       = 'smtp.mailtrap.io';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = '52085932f8d889';                        // SMTP username
    $mail->Password   = '312abd2f3abab7';                        // SMTP password
    $mail->SMTPSecure = 'tls';                                   // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 25;                                      // TCP port to connect to

    //Recipients
    $mail->setFrom($clientEmail);
    $mail->addAddress('manarata.panadda@gmail.com');     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $client_subject; 
    $mail->Body    = $mail_body;
    $mail->AltBody = $mail_body; 

    $mail->send();
    echo "<em>Message has been sent</em>";
} catch (Exception $e) {
    echo "<em>Message could not be sent. Mailer Error: {$mail->ErrorInfo} </em>";
}

}
    
