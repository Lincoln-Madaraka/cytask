<?php  

$sName = "localhost";
$uName = "root";
$pass  = "linc";
$db_name = "task_management_db";
$port = 5432;

try {
	$conn = new PDO("mysql:host=$sName;port=$port;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}