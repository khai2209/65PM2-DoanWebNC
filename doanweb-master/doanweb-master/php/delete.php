<?php
require './connectdb.php';

$id = (int)$_GET['id'];
$sql = " DELETE FROM `tbl_user` WHERE `id` = {$id} ";

if (mysqli_query($conn, $sql)) {
    header("location:admin-account.php");
} else {
    echo "loi:" . $sql . "<br>" . mysqli_error($conn);
}
