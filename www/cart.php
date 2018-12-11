<?php 
include("include/bd_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<title>Корзина заказов</title>
</head>
<body>	 <div id="block-body">
		<?php 
		include("include/block-header.php");
		 ?>
		 <div id="block-right">
		 <?php 
		 include("include/block-category.php");
		 include("include/block-news.php");
		  ?>
		 </div>
		 <div id="block-content">
		 	<p id="nav-breadcrumbs"><a href="index.php">Главная страница</a></p>
<?php 
function clear_string($str) {
    return trim(strip_tags($str));}
 $action = clear_string($_GET["action"]);//корзина
switch ($action){
	case 'oneclick':
	echo '
	<div id="block-step">
	<div id="name-step">
	<ul>
	<li><a class="active">Корзина товаров</a></li>
	</ul>
	</div>
	<a href="cart.php?action=clear">Очистить</a>
	</div>
	 ';
	// echo '
	// <div id="header-list-cart">
	// <div id="head1">Изображение</div>
	// <div id="head2">Наименование товара</div>
	// <div id="head3">Кол-во</div>
	// <div id="head4">Цена</div>
	// </div>';
	 //$result = mysql_query("SELECT * FROM cart,table_product WHERE cart.cart_ip = '($_SERVER['REMOTE_ADDR'])' AND table_product.products_id = cart.cart_id_products",$link);
		 	If (mysql_num_rows($result) > 0) {
		 		$row = mysql_fetch_array($result);
		 		echo '
	<div id="header-list-cart">
	<div id="head1">Изображение</div>
	<div id="head2">Наименование товара</div>
	<div id="head3">Кол-во</div>
	<div id="head4">Цена</div>
	</div>';
		 		do{
		 			$int = $row["cart_price"] * $row["cart_count"];
		 			$all_price = $all_price + $int;
		 			if (strlen($row["image"]) > 0 && file_exists("./uploads_images/".$row["image"]))
		 			{
		 				$img_path = './uploads_images/'.$row["image"];
		 				$max_width = 100;
		 				$max_height = 100;
		 				list($width, $height) = getimagesize($img_path);
		 				$ratioh = $max_height/$height;
		 				$ratiow = $max_width/$width;
		 				$ratio = min($ratioh, $ratiow);
		 				$width = intval($ratio*$width);
		 				$height = intval($ratio*$height);
		 			}else{
		 				$img_path = "/images/noimages.jpeg";
		 				$width= 120;
		 				$height = 105;
		 			}
		 			
	echo '

	<div class="block-list-cart">
	<div class="img-cart">
	<p align="center"><img src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/></p>
	</div>
	<div class="title-cart">
	<p><a href="">'.$row["title"].'</a></p>
	<p class="cart-mini-features">'.$row["mini-features"].'</p>
	</div>
	 <div class="count-cart">
	 <ul class="input-count-style">

	 <li>
	 <p align="center" class="count-minus">-</p>
	 </li>

	 <li>
	 <p align="center"><input class="count-input" maxlength="3"type="text" value="'.$row["cart_count"].'"/></p> 
	 </li>

	 <li>
	 <p align="center" class="count-plus">+</p>
	 </li>
	 </ul>
	 </div>
	  <div class="price-product"><h5><span class="span-count"></span> x <span>'.$row["cart_price"].'</span></h5><p>'.$row["cart_price"].'</p></div>
	  <div class="delete-cart"><a href="">Удалить</a></div>
	 <hr>

</div>

	 ';
	}
	while ($row = mysql_fetch_array($result));
	echo '
	<h2 class="itog-price" align="right">Итого: <strong>'.$all_price.'</strong>грн</h2>';
}else{
	echo'<h3 id="clear-cart" align="center">Корзина пуста</h3>';
}
		break;
		default:
		break;

}
 ?>
		 </div>
}
		 <?php 
		 include("include/block-footer.php");
		  ?>
	</div>
<!-- <content>
	<div class="articles">
		<img src="images/merry-christmas-gift-min.jpg">
</content>
	<section>
<?php
	if(empty($_COOKIE['username'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="text" name="username" placeholder=" Логин"><br>
	<input type="password" name="password" placeholder="Пароль">
	<button type="submit" name="submit">Вход</button>
	<a href="signup.php">Регистрация</a>
	</form>
<?php
}
else {
	?>
	<p><a href="">Мой профиль</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
<?php	
}
?>
</section>


<footer class="clear">
	<p>Все права защищены</p>
</footer>--->
<script type="text/javascript" src="js/shop_script.js"></script>
</body>

</html>