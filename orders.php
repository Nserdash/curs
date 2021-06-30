<?php
$nameofpage = 'Корзина';
include 'include/head.php';
?>

<div id = "basket">
<div id = "basketcard">
<a href = "http://localhost/#goods-list" class = "x">x</a>

<?php
if (!IsSet($_SESSION["userid"])) {
	echo 'Вы не авторизованы.';
} 
else
{

	include_once 'db.php'; 

	$i = 0;
	$orderid = 0;
	$result = $mysql->query("
	SELECT s.*, p.product_name 
	FROM 
	orders o, 
	ordersspec s, 
	products p
	where s.goodsid = p.idproducts
	AND o.idorders = s.orderid 
	AND o.baskettrue = 0 
	AND o.userid = ".$_SESSION["userid"]
	);

	

	if ($result->num_rows > 0) {

		echo '

		<table class = "absolute">
		<tr>
		<th>Товар</th>
		<th>Цена</th>
		<th>Количество</th>
		<th><a href = "clean.php" id = "clean">Очистить корзину</a></th>
		</tr>
		</table>

		<div id = "prokrutka">
		
		<table>
		
		';		
		
		
		while($row = $result->fetch_assoc()) {
			
		$orderid = $row["orderid"];
		
		echo  ' <tr>  
		<td class = "basketrow2">'.$row["product_name"].'</td>
		<td class = "basketrow2">'.$row["price"].'</td>

		<td class = "basketrow2">

			<form action = "goodscount.php" method = "post" id = "goodscountform">	

				<input name = "goodscount" value = "'.$row["amount"].'" class = "mini">
				<input name = "price" value = "'.$row["price"].'" class = "invisible">
				<input name = "id" value = "'.$row["idordersspec"].'" class = "invisible">
				<input type = "submit"  class = "invisible">

			</form>

		</td>

		<td class = "basketrow2"><a href = "/delete.php?goodsid='.$row["goodsid"].'">Удалить</a> </td>
		
		</tr>';

		

		}

		echo '</table>
		
		</div>';

	$totalcost = 0;

	$rstotalcost = $mysql->query("SELECT SUM(total) as totalcost FROM ordersspec where orderid =".$orderid);

	if ($rstotalcost) {
		$row = $rstotalcost->fetch_assoc();
		$totalcost = $row["totalcost"];
	}

		echo '
		
		<div id = "basketbottom">

			<div id = "sum"> 
				Пользователь: '.$user.'<br>
				Cумма заказа: '.$totalcost.'


			</div>	

			<form action = "doneorders.php" method = "post" name = "contact_form"  onsubmit="return check ( );">

				<input name = "name" value = "'.$name.'" class = "invisible" onclick = "check">
				<input placeholder = "* Номер телефона" name = "phonenumber">
				<input placeholder = "* Адрес доставки" name = "deliveryadress">
				<input placeholder = "Адрес доставки" name = "orderid" value = "'.$orderid.'" class = "invisible">
				<input type = "submit" value = "Оформить заказ">
				
			</form>
			
		</div>
		';
	}

	else {
	echo'<div>Ваша корзина пуста</div>';
	}

}

?>

</div>
</div>