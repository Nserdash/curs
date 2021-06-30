<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
</div>
<?php

include_once('db.php'); 
$id = $_POST["orderid"];
$nbr = $_POST["phonenumber"];
$adress = $_POST["deliveryadress"];
$name = $_POST["name"];

$result = $mysql->query("UPDATE `orders` SET `baskettrue` = '1', `customer_phonenumber` = '$nbr', `delivery_address` = '$adress' WHERE (`idorders` =".$id.")");

echo '<div class = "slide1"><h2>Спасибо за заказ!</h2></div>';
header('Refresh: 2; url=http://localhost/#goods-list.php');            

?>
