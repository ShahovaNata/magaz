<?php 
include("include/bd_connect.php");
$sorting = $_GET["sort"]; //начало(Сортировка товаров)
switch ($sorting) 
{
	case 'price-asc':
	$sorting = 'price ASC';
	$sort_name = 'от дешевых к дорогим';
	break;
	case 'price-desc':
	$sorting = 'price DESC';
	$sort_name = 'от дорогих к дешевым';
	break;
	case 'popular':
	$sorting = 'count DESC';
	$sort_name = 'популярные';
	break;
	case 'news':
	$sorting = 'datetime DESC';
	$sort_name = 'новинки';
	break;
	case 'podtype':
	$sorting = 'podtype';
	$sort_name = 'от А до Я';
	break;
	default:
	$sorting = 'products_id DESC';
	$sort_name = 'Нет сортировки';
	break;
} //конец
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<title>Интеренет-Магазин Новогодний и Рождественский декор</title>
</head>
<body>
	<div id="block-body">
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
		 	<div id="block-sorting">
		 		<p id="nav-breadcrumbs"><a href="index.php">Главная страница</a></p>
		 		<ul id="option-list">

		 			<li>Вид:</li>

		 			<li><img id="style-grid" src="images/256131-200.png" alt=""></li>
 	 			    <li><img id="style-list" src="images/Без названия (2).png" alt=""></li>

 	 			    <li>Сортировка</li> 
 	 			    <li id="select-sort"><?php echo $sort_name; ?>

 	 			    	<ul id="sorting-list">
 	 			    		<li><a href="index.php?sort=price-asc">от дешевых к дорогим</a></li>
 	 			    		<li><a href="index.php?sort=price-desc">от дорогих к дешевым</a></li>
 	 			    		<li><a href="index.php?sort=popular">популярные</a></li>
 	 			    		<li><a href="index.php?sort=news">новинки</a></li>
 	 			    		<li><a href="index.php?sort=podtype">от А до Я</a></li>
 	 			    	</ul>
 	 			    </li>
		 		</ul>
		 	</div>
		 	<br>
		 	<ul id="block-tovar-grid">
		 	<?php 
		 	$result = mysql_query("SELECT * FROM table_product WHERE visible='1' ORDER BY $sorting ",$link);
		 	if (mysql_num_rows($result) > 0) 
		 	{
		 		$row = mysql_fetch_array($result);
		 		do{
		 			echo ' 

		 			<li>
		 			<div class="block-images-grid">
		 			<img src="/uploads_images/'.$row["image"].'"/>

		 			</div>
		 			<p class="style-title-grid"><a href="" >'.$row["title"].'</a></p>
		 			
		 			<a class="add-cart-style-grid"></a>
		 			<p class="style-price-grid"><strong>'.$row["price"].'</strong>грн</p>
		 			</li>

		 			 ';
		 		  }
		 		while ($row = mysql_fetch_array($result)); 
			 	}

		 	 ?>

		 	 </ul>

		 	 <ul id="block-tovar-list">
		 	<?php 
		 	$result = mysql_query("SELECT * FROM table_product WHERE visible='1' ORDER BY $sorting ",$link);
		 	if (mysql_num_rows($result) > 0) {
		 		$row = mysql_fetch_array($result);
		 		do{
		 			echo ' 

		 			<li>
		 			<div class="block-images-list">
		 			<img src="/uploads_images/'.$row["image"].'"/>

		 			</div>

		 			
		 			<p class="style-title-list"><a href="" >'.$row["title"].'</a></p>

		 			<a class="add-cart-style-list"></a>
		 			<p class="style-price-list"><strong>'.$row["price"].'</strong>грн</p>
		 			</li>

		 			 ';
		 		  }
		 		while ( $row = mysql_fetch_array($result)); 
			 	}
		 	 ?>

		 	 </ul>

		 </div>

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