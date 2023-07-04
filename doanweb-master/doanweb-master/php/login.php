<?php
session_start();
require './connectdb.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hash = $row['password'];

    if (password_verify($password, $hash)) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] == '1') {
            header('Location: admin-account.php');
        } else {
            header('Location: home-index.php');
        }
        exit();
    } else {
        // Sai mật khẩu
        echo "Sai mật khẩu";
    }
} else {
    // Người dùng không tồn tại
    echo "Người dùng không tồn tại";
}

$stmt->close();
$conn->close();
?>