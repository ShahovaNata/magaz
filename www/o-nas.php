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
<title>О нас</title>
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
		 	<center><h2>Brio</h2></center>
		 	<center>	<p>Оформление интерьера занимает значимое место в современном мире. На сегодня любая хозяйка хочет, чтобы обстановка жилого или рабочего помещения, где проводится большое количество времени, была не только функциональной, но и комфортной и стильной. Это возможно сделать именно с помощью предметов декора, которые помогают расставлять акценты.</p>
		 	<br>
		 	<p>Если интерьер начинает формироваться с самого начала ремонта и зависит от строительных и отделочных материалов, которые включают напольные и настенные покрытия нужного цвета и текстуры, особенности форм и тому подобное, то завершающие штрихи в обстановке ставят именно предметы декора. Различные вазы, картины, торшеры, подсвечники и многое другое создают атмосферу уюта, комфорта и изысканного стиля, что говорит о наличии вкуса у хозяина.</p><br>
		 	<p>Наш магазин «Brio» предлагает Вам огромный ассортимент продукции, среди которого вы найдете как предметы интерьера для жилых и нежилых помещений – вазы, картины, кашпо, подсвечники, фонари, клетки, лампы, фоторамки, часы, так и тематические и сезонные товары – предметы для декорирования стола, новогодняя и рождественская тематика. </p></center>
		 </div>


		 <?php 
		 include("include/block-footer.php");
		  ?>
	</div>
<script type="text/javascript" src="js/shop_script.js"></script>
</body>

</html>