<?php
session_start();
require './connectdb.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Tên tài khoản đã được sử dụng. Vui lòng chọn tên khác.";
} else {
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email đã được sử dụng. Vui lòng sử dụng email khác.";
    } else {
        $stmt = $conn->prepare("INSERT INTO tbl_user (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: home-index.php');
        } else {
            echo "Có lỗi xảy ra trong quá trình đăng ký tài khoản.";
        }
    }
}

$stmt->close();
$conn->close();
?>
