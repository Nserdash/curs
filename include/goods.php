<?php
$result = null;
$categoryid = "";
if (array_key_exists('category',$_GET)) {
$categoryid = $_GET["category"];
$result = $mysql->query("SELECT * FROM products where categoryid=".$categoryid);
}

else {

$result = $mysql->query("SELECT * FROM products");

}

                                                    	
if ($result->num_rows > 0) {

    
	while($row = $result->fetch_assoc()) {


	echo ' <div class = "goods">  <h2> '.$row["product_name"].' </h2> <div id = "price">'.$row["price"].' </div> <t> '.$row["description"].'</t><br> <img src = "/images/'.$row["URL"].'"> <a href = "add.php?idproducts='.$row["idproducts"].'&price= '.$row["price"].' " class = "basketcard"> <img src = "../images/basket.png">  </a> </div> ';
                                                      	
	}

    
}

?>

