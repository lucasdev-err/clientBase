<?php 
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];

$pdo = null;

try{
    $pdo = new PDO($dsn, $dbUser, $dbPassword, $options);
} catch (\PDOException $e){
    error_log("DB connection error: " . $e->getMessage());
    die("We're experiencing technical difficulties. Please try again later.");
}

?>