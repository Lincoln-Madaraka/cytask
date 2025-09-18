<?php  

$sName   = getenv("DB_HOST") ?: "aws-1-ap-south-1.pooler.supabase.com";
$uName   = getenv("DB_USER") ?: "postgres.hwqiletkwoegcwswmjjl";
$pass    = getenv("DB_PASS") ?: "TaskManager911";
$db_name = getenv("DB_NAME") ?: "postgres";
$port    = getenv("DB_PORT") ?: "5432";

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
    //echo "Connected to Supabase Postgres!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
