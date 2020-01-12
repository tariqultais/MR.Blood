<?php
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'donor';
$db = mysqli_connect($hostname, $user, $password,$mysql_database);
mysqli_select_db("donor", $db);
?>
