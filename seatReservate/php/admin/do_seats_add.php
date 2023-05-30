<?php
include('../config.php');
$description = $_POST['description'];
$name = $_POST['name'];
$insert = "insert into seats (name,description)VALUES('$name','$description') ";
if (mysqli_query($con, $insert)) {
    echo "<script>alert('添加成功！');window.location='seat.php';</script>";
} else {
    echo "<script>alert('添加失败，请重试');window.location='seat_add.php';</script>";
}