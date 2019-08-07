<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

if(isset($_POST)){
    $clientName = $_POST['nameClient']; 
    $clientEmail = $_POST['email']; 
    $ClientMessage = $_POST['message']; 

    //
     
    $mail_subject = "new email from $mailClient <br>";
    $mail_body = "Hello owner of this webiste, you have recieved a message from $clientName, find message below :<br> <b> $ClientMessage </b>";

//empty 


if(empty($clientName)){
    echo "fill in your name"; 

exit; 
}
else if(empty($clientEmail)){
    echo "fill in your email";
    var_dump($clientEmail); 
    die; 

exit;
}
else if(empty($ClientMessage)){
    echo "fill in your message";
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
    echo " no valid email";
    exit; 
}

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
            
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.mailtrap.io';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = '52085932f8d889';                 // SMTP username
    $mail->Password   = '312abd2f3abab7';                       // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($clientEmail);
    $mail->addAddress('manarata.panadda@gmail.com');     // Add a recipient
    

    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact email'; 
    $mail->Body    = $mail_body;
    $mail->AltBody = $mail_body; 

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





}
    
