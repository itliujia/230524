<?php
include('../config.php');
$password = $_POST['password'];
$name = $_POST['name'];
$stuno = $_POST['stuno'];
$insert = "insert into users (name,password,stuno)VALUES('$name','$password','$stuno') ";
if (mysqli_query($con, $insert)) {
    echo "<script>alert('添加成功！');window.location='user.php';</script>";
} else {
    echo "<script>alert('添加失败，请重试');window.location='user_add.php';</script>";
}