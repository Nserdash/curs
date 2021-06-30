<?php

include_once('db.php'); 




$result = $mysql->query("DELETE FROM ordersspec");    


header('Location: http://localhost/orders.php');



?>