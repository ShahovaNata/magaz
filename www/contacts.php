<?php 
include("include/bd_connect.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<title>Контакты</title>
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
		 <p id="nav-breadcrumbs"><a href="index.php">Главная страница</a></p>
		 <div id="block-content">
		 	<h1>Консультации и заказ по телефонам</h1>
		 	<h4>(044) 537-02-22</h4>
		 	<br><br>
		 	<h4>(044) 503-80-80</h4>
</h4>
<h3>Магазин №3, <br>
ул. Крещатик, д. 20-22</h3>

		 </div>


		 <?php 
		 include("include/block-footer.php");
		  ?>
	</div>
<script type="text/javascript" src="js/shop_script.js"></script>
</body>

</html>