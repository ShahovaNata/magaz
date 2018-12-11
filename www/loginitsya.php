<?php
$dbc = mysqli_connect('localhost', 'root', '', 'bd');
if(!isset($_COOKIE['user_id'])) {
if(isset($_POST['submit'])) {
$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
if(!empty($user_username) && !empty($user_password)) {
$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
$data = mysqli_query($dbc,$query);
if(mysqli_num_rows($data) == 1) {
$row = mysqli_fetch_assoc($data);
setcookie('user_id', $row['user_id'],time() + (60*60*24*30));
setcookie('username', $row['username'],time() + (60*60*24*30));
$home_url = 'http://' .$_SERVER['HTTP_HOST'];
header('Location: '.$home_url);
}
else {
echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
}}
else {
echo 'Извините вы должны заполнить поля правильно';
}}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="articles">
	<img src="images/christmas-1410972122pnm.jpg"></div>
<?php
if(empty($_COOKIE['username'])) {
?>
<div class="section">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="text" name="username" placeholder=" Логин">
	<input type="password" name="password" placeholder="Пароль">
	<button type="submit" name="submit">Вход</button></form>
<?php
}
else {
	?>
	<center><p><a href="index.php">На главную</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p></center>
<?php	
}
?></div> 
</body>
</html>