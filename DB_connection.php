<?php  

$sName = getenv('MYSQLHOST') ?: "127.0.0.1";
$uName = getenv('MYSQLUSER') ?: "root";
$pass  = getenv('MYSQLPASSWORD') ?: "";
$db_name = getenv('MYSQLDATABASE') ?: "task_management_db";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}