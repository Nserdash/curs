<?php 
$nameofpage = 'Главная страница';
include 'include/head.php';
include 'include/menu.php';

?>

   


    <div class = "owl-carousel">

        <div class = "slide1">
        <h2>Бытовая техника</h2>
        <p>По низким ценам</p>
        </div>

        <div class = "slide2">
        <h2>Большой выбор товаров</h2>
        <p>Самых разных брендов</p>
        </div>

        <div class = "slide3">
        <h2>Бесплатная доставка</h2>
        <p>В черте города</p>
        </div>

    </div>

    <div class = "mainbutton">

        <button type="button" class="btn btn-primary" onclick= "window.location.href = '#goods-list';">Выбрать товар</button>
        

    </div>

</div>

<div class = "container-screen">

    <div id = "goods-list">    

        <?php
        include_once 'db.php'; 
        include 'include/categorys.php';
        include 'include/goods.php';
        ?>

    </div>

</div>

<a class ="fixed"  href =  "orders.php">
<img src = "images/basket.png">
</a>

<div id = "status">
<?php echo $status;?>
<div><?php echo $enter;?></div>
</div>


<?php 
include 'include/footer.php';
?>