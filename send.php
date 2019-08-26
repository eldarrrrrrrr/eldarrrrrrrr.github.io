<?php

$emailToSend = "eldar-dadashov@mail.ru";

if (isset($_POST['firstname']) && isset($_POST['phone']) && isset($_POST['email'])) {
   $sub = "Заказ - мишки";
   $message = '';
   foreach($_POST as $name => $value) {
       $message .= $name . ': ' . $value . "\r\n";
   }
   $send = mail ($emailToSend,$sub,$message,"Content-type:text/plain; charset = UTF-8\r\nFrom:mishki@fromsite.ru");
}
header('Location: /success.html');

?>