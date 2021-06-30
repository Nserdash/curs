<?php 
$nameofpage = 'Вход';
include 'include/head.php';
?>
<div id = "loginback">
<?php 
include 'include/menu.php';
?>


<form action = "login.php" method = "post" id = "login">
<input name = "login" placeholder = "Логин">
<input name = "pass" placeholder = "Пароль">
<input type = "submit" value = "Войти">
<a href = "signinform.php"> Зарегистрироваться <a>
</form>

</div>
</div>
<?php 
include 'include/footer.php';
?>

