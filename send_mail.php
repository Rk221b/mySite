<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/Exception.php';
require 'vendor/phpmailer/PHPMailer.php';
require 'vendor/phpmailer/SMTP.php';
  
$mail = new PHPMailer(true); 
  
try { 

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $mail->SMTPDebug = 1;                                        
    $mail->IsSMTP();                                             
    $mail->Host       = 'smtp.gmail.com';                      
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'gk221.g@gmail.com';                  
    $mail->Password   = 'Qazxcv1029';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->SetFrom('gk221.g@gmail.com', 'My Site RK');            
    $mail->AddAddress('rk221.r@gmail.com'); 
       
    $mail->IsHTML(true);                                   
    $mail->Subject = $email; 
    $mail->Body    = $email . " " . $firstName . " " . $lastName . " " . $message; 
    $mail->AltBody = $email; 
    $mail->Send(); 
    echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 
  
?> 