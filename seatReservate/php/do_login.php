<?php
if (!isset($_SESSION)) {
    session_start();
    $_SESSION['id'] = 2;
}
include('config.php');
$stuno = $_POST['stuno'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE stuno='$stuno'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
if ($password == $row['password']) {
    $_SESSION['user_name'] = $row['name'];
    echo "<script>alert('登录成功！');window.location='home.php';</script>";
    $_SESSION['islogin'] = 1;
    $_SESSION['user_id'] = $row['id'];
} else {
    echo "<script>alert('用户名或者密码错误，请重新登录！');window.location.href='index.php'</script>";
}