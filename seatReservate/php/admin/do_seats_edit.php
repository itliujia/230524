<?php
include('../config.php');
$description = $_POST['description'];
$name = $_POST['name'];
$id = $_POST['id'];
$update = "UPDATE seats SET name='$name', description='$description' WHERE id=$id;";
if (mysqli_query($con, $update)) {
    echo "<script>alert('修改成功！');window.location='seat.php';</script>";
} else {
    echo "<script>alert('修改失败，请重试');window.location='seat_edit.php?id='" . $id . ";</script>";
}