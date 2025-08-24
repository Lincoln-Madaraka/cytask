<?php
require "DB_connection.php";
$hash = password_hash("123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (full_name, username, password, role, email) 
                        VALUES ('System Admin', 'admin', ?, 'admin', 'admin@example.com')");
$stmt->execute([$hash]);

echo "Admin created with username=admin, password=123\n";

