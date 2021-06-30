<?php   

$result = $mysql->query("SELECT * FROM productscategory");

if ($result->num_rows > 0) {




	echo ' <nav class = "menu">  <a href="http://localhost/#goods-list" class = "categorys">Все товары</a>  ';
	
	while($row = $result->fetch_assoc()) {

	echo  '<a href="?category='.$row["idproductscategory"].'#goods-list" class = "categorys"> '.$row["category_name"].'</a>';
	                                                      	
	}

	echo '</nav>';



}

?>