<?php
$dbc = mysqli_connect('localhost', 'root', '', 'bd') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `signup` (username, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);
			echo '
			 УСПЕШНО';
		}
		else {
			echo 'Логин уже существует';
		}

	}
}
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
		  ?>
		 </div>
		 <p id="nav-breadcrumbs"><a href="index.php">Главная страница</a></p>
		 <div id="block-content"> 
<center><div class="block-register"> <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"><br>
	<input type="text" name="username" placeholder="Введите ваш логин">  <br>
	<input type="password" name="password1" placeholder="Введите ваш пароль"> <br>
	<input type="password" name="password2" placeholder="Введите пароль еще раз"> <br>
	<button type="submit" name="submit">Зарегистрироваться</button>
	</form>
<footer class="clear">
<p>Все права защищены</p>
</footer></div></center><script type="text/javascript" src="js/shop_script.js"></script>
</body>

</html>