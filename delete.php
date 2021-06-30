<?php

include_once('db.php'); 

	$id = $_GET["goodsid"];


        $result = $mysql->query("DELETE FROM ordersspec where goodsid =" .$id );    


	header('Location: http://localhost/orders.php');

       

?>