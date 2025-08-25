<?php  

$sName = getenv('DB_HOST') ?: "aws-1-us-east-2.pooler.supabase.com";
$uName = getenv('DB_USER') ?: "postgres.lrbjhcejtnalhjuprtxp";
$pass  =  getenv('DB_PASS') ?:"TaskManager911";
$db_name = getenv('DB_NAME') ?: "postgres";
$port = getenv('DB_PORT') ?: 6543;

try {
	$conn = new PDO(
        "pgsql:host=$sName;port=$port;dbname=$db_name;sslmode=require",
        $uName,
        $pass
    );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}