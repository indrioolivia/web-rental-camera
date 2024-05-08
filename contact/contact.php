<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$data = "email: " . $email . " , nama :  " . $name . " , text : " . $text . PHP_EOL;;
$file = fopen('contact.txt', 'a');
fputs($file, $data);
fclose($file);   
?>