<?php
$host = "mysql.railway.internal";
$user = "root";
$pass = "YVhiWDayyMuALJChfnhSaeOPmurKpFPq";
$db   = "railway";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

