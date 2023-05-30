<?php
include('../config.php');
$password = $_POST['password'];
$name = $_POST['name'];
$stuno = $_POST['stuno'];
$id = $_POST['id'];
$update = "UPDATE users SET name='$name', stuno='$stuno',password='$password' WHERE id=$id;";
if (mysqli_query($con, $update)) {
    echo "<script>alert('修改成功！');window.location='user.php';</script>";
} else {
    echo "<script>alert('修改失败，请重试');window.location='user_edit.php?id='" . $id . ";</script>";
}