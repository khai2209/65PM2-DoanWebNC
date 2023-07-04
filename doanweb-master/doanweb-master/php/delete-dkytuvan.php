<?php
require './conn.php';

$uid = (int)$_GET['uid'];
$sql = " DELETE FROM `user` WHERE `uid` = {$uid} ";

if (mysqli_query($conn, $sql)) {
    header("location:admin-dangkytuvan.php");
} else {
    echo "loi:" . $sql . "<br>" . mysqli_error($conn);
}
