<?php
require "connect.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password)
        VALUES ('$username', '$password')";

if ($conn->query($sql)) {
    echo "Đăng ký thành công! <a href='index.html'>Đăng nhập</a>";
} else {
    echo "Lỗi: Tên đăng nhập đã tồn tại";
}
?>

