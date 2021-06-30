<?php

include_once 'db.php'; 


$count = $_POST['goodscount'];
$price = $_POST['price'];
$id = $_POST['id'];

$sum = $price * $count;

$result = $mysql->query("UPDATE `ordersspec` SET `amount` = ".$count.", `total` = ".$sum." WHERE (`idordersspec` = ".$id.")" );

header('Location: orders.php');

?>

