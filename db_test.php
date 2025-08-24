<?php
require "DB_connection.php";

try {
    $stmt = $conn->query("SELECT id, username, role FROM users");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
} catch (Exception $e) {
    echo "DB error: " . $e->getMessage();
}

