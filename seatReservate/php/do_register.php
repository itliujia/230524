<?php
include('config.php');
$stuno = $_POST['stuno'];
$name = $_POST['name'];
$password = $_POST['password'];
$insert = "insert into users (stuno,name,password)VALUES('$stuno','$name','$password') ";
if (mysqli_query($con, $insert)) {
    echo "<script>alert('注册成功，去登录');window.location='index.php';</script>";
} else {
    echo "<script>alert('注册失败！');window.location='register.php';</script>";
}