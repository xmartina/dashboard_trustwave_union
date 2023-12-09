<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.azurecreditunion.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@azurecreditunion.com"; // Change Email Address
        $mail->Password = '@SECazurecreditunion1'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('contact@azurecreditunion.com','Azure Credit Union'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("contact@azurecreditunion.com", "Azure Credit Union"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>