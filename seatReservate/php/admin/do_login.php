<?php
session_start();
include('../config.php');
$name = $_POST['name'];
$password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE name='$name'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
if ($password == $row['password']) {
    echo "<script>alert('登录成功');window.location.href='home.php'</script>";
    $_SESSION['name'] = $name;
    $_SESSION['islogin'] = 1;
} else {
    echo "<script>alert('用户名或者密码错误，请重新登录！');window.location.href='index.php'</script>";
}