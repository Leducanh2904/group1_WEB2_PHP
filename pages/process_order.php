<?php
session_start(); // Bắt đầu session

// Kiểm tra xem dữ liệu POST đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin đặt hàng từ dữ liệu POST
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phone_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $paymentMethod = $_POST["paymentMethod"];

    // Ghi thông tin đặt hàng vào cơ sở dữ liệu
    include ("connection.php");

    // Tạo truy vấn để chèn thông tin đặt hàng vào cơ sở dữ liệu
    $sql = "INSERT INTO orders (full_name, phone_number, email, address, payment_method) VALUES ('$fullName', '$phoneNumber', '$email', '$address', '$paymentMethod')";

    // Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Đặt hàng thành công!";
    } else {
        echo "Đặt hàng không thành công: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
