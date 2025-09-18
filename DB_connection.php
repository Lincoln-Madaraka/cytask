<?php  

$sName   = "aws-1-ap-south-1.pooler.supabase.com";
$uName   = "postgres.hwqiletkwoegcwswmjjl"; // full pooler username
$pass    = "TaskManager911";                 // pooler password
$db_name = "postgres";
$port    = 5432;

try {
    $conn = new PDO(
        "pgsql:host=$sName;port=$port;dbname=$db_name;sslmode=require",
        $uName,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => true 
        ]
    );
    echo "Connected to Supabase Postgres!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
