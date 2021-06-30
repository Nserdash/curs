<?php 
$nameofpage = 'Регистрация';
$color = "#000";
include 'include/head.php';
?>
<div id = "loginback">
<?php 
include 'include/menu.php';
?>


<form action = "signin.php" method = "post" id = "login">
<input name = "login" placeholder = "Логин">
<input name = "pass" placeholder = "Пароль">
<input name = "name" placeholder = "Имя">
<input type = "submit" value = "Зарегистрироваться">
<a href = "loginform.php"> У меня уже есть логин и пароль <a>
</form>

</div>
<?php 
include 'include/footer.php';
?>
