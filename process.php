<?php

$username = $_POST['username'];
$message = $_POST['message'];
$email = $_POST['email'];
$header = "from:" . $email;
$message += 'Hi, ' . $username . " sent this message";
$to = "proftoby97@gmail.com";
mail($header, $message, $to);
?>