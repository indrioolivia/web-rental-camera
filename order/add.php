<?php
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];

$order = $productName . ", " . $productPrice . "\n";;
$file = fopen('list.txt', 'a');
fputs($file, $order);
fclose($file);
?>