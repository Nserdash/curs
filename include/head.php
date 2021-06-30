<!DOCTYPE html>
<html lang="ru">
<head>

<?php

$status = '';
$enter = '<a href = "/loginform.php" class = "nav-brand">Войти</a>';
$name = null;
session_start();

if(isset($_SESSION['userid']))    {

    $enter = '<a href = "/exit.php" class = "nav-brand">Выйти</a>';
    $name = $_SESSION['name'];
    $user = '<t class = "user"> "'.$name.'"</t>';
    $status = '<a class = "nav-brand" >Пользователь '.$user.' авторизован</a>';

}
?>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo "$nameofpage"; ?></title>

<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
<link rel="stylesheet" type="text/css" href="css/styles.css">



<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">

<script src="js/jquery-3.5.1.min.js"></script>
<script src="owl/owl.carousel.min.js"></script>


<script>
$(document).ready(function(){
$('.owl-carousel').owlCarousel({

autoplayHoverPause:false,
autoplay:true,
items: 1,
loop:true

});
});

function showbasket() {
    
    document.querySelector('#basket').style.setProperty('--var-opacity', '1');
    document.querySelector('#basket').style.setProperty('--var-z-index', '1000');
    document.querySelector('#blur').style.setProperty('--var-filter', 'blur(10px)');

}

function hidebasket() {
    
    document.querySelector('#basket').style.setProperty('--var-opacity', '0');
    document.querySelector('#basket').style.setProperty('--var-z-index', '-1000');
    document.querySelector('#blur').style.setProperty('--var-filter', 'blur(0px)');

}

function formSubmit()
{
    document.getElementById('goodscountform').submit()
}

function check ( )
{
	valid = true;

        if ( document.contact_form.phonenumber.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Номер телефона'." );
                valid = false;
        }

        if ( document.contact_form.deliveryadress.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Адрес доставки'." );
                valid = false;
        }

        return valid;
}


</script>

</head>
