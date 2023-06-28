<?php
session_start();
$_SESSION['islogin'] = 0;

echo "<script>alert('退出登录！');window.location.href='index.php'</script>";