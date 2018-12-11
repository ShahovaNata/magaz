<?php 
$db_host   = 'localhost';
$db_user   = 'root';
$db_pass   = '';
$db_database   = 'bd';

$link = mysql_connect($db_host, $db_user,$db_pass);

mysql_select_db($db_database,$link) or die("Нет подключения с БД".mysql_error());
mysql_query("SET NAMES utf8");


 ?>