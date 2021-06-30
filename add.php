<?php
include 'include/head.php';
include_once('db.php'); 

if (!IsSet($_SESSION["userid"])) {
   echo '<div class = "slide1"><h2>Чтобы сделать заказ необходимо авторизоваться</h2></div>';
    
   header('Refresh: 2; url=http://localhost/#goods-list.php');
    return;
}

$id = $_GET["idproducts"];
$price = $_GET["price"];
$orderid = 0;

while($orderid == 0) {

 $result = $mysql->query("SELECT idorders FROM orders where baskettrue = '0' and userid = ".$_SESSION["userid"]);

 if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $orderid = $row["idorders"];
 
 }
 else {

    $result = $mysql->query("INSERT INTO orders (baskettrue, userid) VALUES (0, ".$_SESSION["userid"].")");

 }

}

$result = $mysql->query ("insert into ordersspec (goodsid, orderid,price, amount, total) 
select ".$id. ",".$orderid.",".$price.", 1, ".$price." from dual 
where not exists (select 1 from ordersspec where goodsid = ".$id." and orderid = ".$orderid.")");


header('Location: http://localhost/#goods-list');


?>

