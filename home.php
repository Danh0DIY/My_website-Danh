<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Trang chủ</title>
</head>
<body>
<h2>Xin chào <?php echo $_SESSION['user']; ?></h2>
<p>Đăng nhập thành công</p>
<a href="logout.php">Đăng xuất</a>
</body>
</html>
