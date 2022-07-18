<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer; 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mail ->isSMTP(); 

    $mail ->Host = 'smtp.gmail.com'; 
    $mail ->Port=587; 
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'tls';

    $mail ->Username = 'jasharajorges@gmail.com';
    $mail ->Password ='tleqxiouvjhvmbeh';
    $mail ->setFrom('jasharajorges@gmail.com','Orges Jasharaj');
    $mail ->addAddress('jasharajorges@gmail.com');
    $mail ->addReplyTo('jasharajorges@gmail.com');

    $mail ->isHTML(true);
    $mail ->Subject = 'PHP Mailer Subject';
    $mail ->Body = '<h3>Name: {$name} <br>Subject: {$subject} <br>Email: {$email} <br>Message : {$message}</h3>';
    $mail ->send();
}
?>