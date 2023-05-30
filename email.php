<?php
$subject = 'You Got Message'; // Subject of your email
$to = 'benilayegueye@gmail.com';  // Recipient's E-mail

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['message'];

$email_from = $name . ' <' . $email . '>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: " . $email_from . "\r\n"; // Sender's E-mail
$headers .= "Return-Path: " . $email . "\r\n";

$message = 'Name: ' . $name . "<br>";
$message .= 'Email: ' . $email . "<br>";
$message .= 'Phone: ' . $phone . "<br>";
$message .= 'Message: ' . $msg;

if (@mail($to, $subject, $message, $headers)) {
    // Transfer the value 'sent' to ajax function for showing success message.
    echo 'sent';
} else {
    // Transfer the value 'failed' to ajax function for showing error message.
    echo 'failed';
}
?>
