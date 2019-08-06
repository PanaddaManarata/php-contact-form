<?php 


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 


    

    if (isset($_POST)) { 

    $nameClient = $_POST['firstname']; 
    $mailClient = $_POST['email']; 
    $messageClient = $_POST['message']; 

    $mail_from = $mailClient; 
    $mail_subject = "new email from $mailClient";
    $mail_body = "Hello owner of this webiste, you have recieved a message from $nameClient. Below you can find the message: $messageClient";

            if(empty($nameClient)){
                echo "fill in your name"; 
                var_dump($nameClient); 
                die; 
            exit; 
            }
            else if(empty($mailClient)){
                echo "fill in your email";
            
            exit;
            }
            else if(empty($messageClient)){
                echo "fill in your message";
                exit; 
            }
            else{
                $mail; 
            }

        


//sanitize 


$clean_email = filter_var($mailClient,FILTER_SANITIZE_EMAIL);

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
    $mail->SMTPAuth   = 'true';                                    // Enable SMTP authentication
    $mail->Username   = '52085932f8d889';                 // SMTP username
    $mail->Password   = '312abd2f3abab7';                       // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mail_from);
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
?> 