<?php
if (!isset($_SESSION)) {
    session_start();
}
include('../config.php');
$id = $_GET['id'];
$delete = "delete from users where id = '$id'";
if (mysqli_query($con, $delete)) {
    echo "<script>alert('删除成功');window.location='user.php';</script>";

} else {
    echo "<script>alert('删除失败！');window.location='user.php';</script>";
}