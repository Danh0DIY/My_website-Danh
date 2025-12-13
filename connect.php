<?php
$host = "RAILWAY_HOST";
$user = "RAILWAY_USER";
$pass = "RAILWAY_PASSWORD";
$db   = "RAILWAY_DATABASE";
$port = RAILWAY_PORT;

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

