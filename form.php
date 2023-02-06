<?php
$name = $_POST['name'];
$email = $_POST['email'];
$headers = "From: $email \r\n";
$message = $_POST['message'];
$to = 'kacperadam10@gmail.com';
$subject = 'Wiadomosc 1';

if(isset($_POST['submit'])) {
    mail($to, $subject, $message, $headers);
}
?>