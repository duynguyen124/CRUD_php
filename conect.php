<?php
// Thông tin kết nối đến cơ sở dữ liệu
$servername = "localhost"; // Địa chỉ máy chủ MySQL
$username = "root"; // Tên đăng nhập MySQL (mặc đinh là root)
$password = ""; // Mật khẩu MySQL(không có thì để trống)
$dbname = "lan_72dctt21"; // Tên cơ sở dữ liệu

// Tạo kết nối sử dụng mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
