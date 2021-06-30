<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>


<?php

include_once('db.php'); 

$login = $_POST["login"];
$pass = $_POST["pass"];
$name = $_POST["name"];

$result = $mysql->query("SELECT * FROM users where login= '$login'");

if ($result->num_rows > 0) {

    echo '<div class = "slide1"><h2>Данный логин уже существует</h2></div>';
    
}
else {

    $result = $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`) VALUES ('$login','$pass','$name')");

    echo '<div class = "slide1"><h2>Вы успешно зарегистрировались!</h2></div>';
    

}

header('Refresh: 2;  url=http://localhost/loginform.php');  

