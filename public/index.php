<?php

declare(strict_types=1);

$dbHost = "db-server";
$dbUsername = "jobs";
$dbPassword = "password";
$dbName = "tdd_php";

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName",
        $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::
    ERRMODE_EXCEPTION);
    echo "MySQL: Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

phpinfo();