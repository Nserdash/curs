<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
</div>

<?php


include_once('db.php'); 

$login = $_POST["login"];
$pass = $_POST["pass"];

$result = $mysql->query("SELECT * FROM users where login= '$login' AND pass = '$pass'");


if($result->num_rows > 0) {


session_start();

while($row = $result->fetch_assoc()) {
$_SESSION['userid'] = $row['id'];
$_SESSION['name'] = $row['name'];
}


header('Location: index.php');

} 

else {
echo '<div class = "slide1"><h2>Неправильный логин или пароль</h2></div>';
header('Refresh: 2;loginform.php');   
}

?>