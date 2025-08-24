<?php  

$sName = "db.lrbjhcejtnalhjuprtxp.supabase.co";
$uName = "postgres";
$pass  = "TaskManager911";
$db_name = "postgres";
$port = 5432;

try {
	$conn = new PDO("pgsql:host=$sName;port=$port;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}