<?php  

$sName = "aws-1-us-east-2.pooler.supabase.com";
$uName = "postgres.lrbjhcejtnalhjuprtxp";
$pass  = "TaskManager911";
$db_name = "postgres";
$port = 6543;

try {
	$conn = new PDO(
        "pgsql:host=$sName;port=$port;dbname=$db_name;sslmode=require",
        $uName,
        $pass
    );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}