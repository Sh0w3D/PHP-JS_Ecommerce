<?php
$to = "qaqoil122@gmail.com";
$subject = "User message system!";
$from = filter_var($_POST['email-sender'], FILTER_SANITIZE_EMAIL);
$text = filter_var($_POST['mail-content'], FILTER_SANITIZE_STRING);

if(isset($_POST['send-mail'])) {
    $message = $text;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '. $from .' ' . "\r\n";
    //send mail
    if(mail($to, $subject, $message, $headers)) {
        echo 'mail send!';
        echo 'to:'.$to. ' subject:'. $subject . ' message:'. $message . ' headers:'. $headers;
        header('Location: ../index.php');
    } else {
        echo 'you have made a mistake';
    }
}

?>