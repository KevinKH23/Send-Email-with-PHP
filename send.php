<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username ='kevinkurniawan265@gmail.com';
    $mail->Password = 'hogn xpqb eycp xitm';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('kevinkurniawan265@gmail.com');

    $mail->addAddress($_POST["email"]);
    
    $mail->isHTML(true);

    $mail->FromName = $_POST["name"];
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Pesan Berhasil Dikirim!');
    document.location.href = 'index.php';
    </script>
    ";
}