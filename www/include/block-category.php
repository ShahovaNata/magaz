
<div id="block-category">
	<div id="top-menu">	
<p align="right" id="block-basket" ><img src="/images/shopping-cart-image-png-clipart-best-bv75A1.png" alt=""><a href="cart.php?action=oneclick">Корзина пуста</a></p><hr>
 </div>

 <p class="header-title">Категории товаров</p>
<ul>
	 <li><a id="index1">Новогодний декор</a> 
		<ul class="category-section">
			<?php 
			$result = mysql_query("SELECT * FROM category WHERE type= 'NewYearDecor'",$link);
		 	if (mysql_num_rows($result) > 0) {
		 		$row = mysql_fetch_array($result);
		 	do{
		 	echo ' 
		 	<li><a href="index.php?cat='.strtolower($row["podtype"]).'&type='.$row["type"].'">'.$row["podtype"].'</a></li>'
		 	;
		 }
		 	while ($row = mysql_fetch_array($result));
		 }

			 ?>
		</ul>
	</li>
	<li><a id="index2">Все для праздничного стола</a>
		<ul class="category-section">
			<?php 
			$result = mysql_query("SELECT * FROM category WHERE type= 'all for the holiday table'",$link);
		 	if (mysql_num_rows($result) > 0) {
		 		$row = mysql_fetch_array($result);
		 	do{
		 	echo ' 
		 	<li><a href="index.php?cat='.strtolower($row["podtype"]).'&type='.$row["type"].'">'.$row["podtype"].'</a></li>'
		 	;}
		 	while ($row = mysql_fetch_array($result));
		 }

			 ?>
			</ul>
		</li>
			<li><a id="index3">Подарки и аксессуары</a>
		<ul class="category-section">
			<?php 
			$result = mysql_query("SELECT * FROM category WHERE type= 'Gifts and accessories'",$link);
		 	if (mysql_num_rows($result) > 0) {
		 		$row = mysql_fetch_array($result);
		 	do{
		 	echo ' 
		 	<li><a href="index.php?cat='.strtolower($row["podtype"]).'&type='.$row["type"].'">'.$row["podtype"].'</a></li>'
		 	;}
		 	while ($row = mysql_fetch_array($result));
		 }

			 ?>
		</ul>
	</li>
</ul>
</div>