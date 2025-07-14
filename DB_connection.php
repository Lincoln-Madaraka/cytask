<?php  

$sName = "centerbeam.proxy.rlwy.net";
$uName = "root";
$pass  = "KGgugmWsExsSphoEIDXZzgjUxSsHUZnf";
$db_name = "railway";
$port = 19301;

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}