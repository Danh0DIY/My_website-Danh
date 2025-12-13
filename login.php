<?php
session_start();
require "connect.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user'] = $username;
        header("Location: home.php");
        exit();
    }
}

echo "Sai tài khoản hoặc mật khẩu!";
?>

