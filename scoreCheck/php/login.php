<?php
$con = mysqli_connect('localhost', 'score', '123456');
$db = mysqli_select_db($con, 'score');


$admin_name = $_GET['admin_name'];
$password = $_GET['password'];
$sql = "SELECT * FROM admin  WHERE password='$password' and admin_name='$admin_name'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
if ($row) {
    echo "<script>alert('登录成功');window.location.href='admin_home.php'</script>";

} else {
    echo "<h2>账号密码不匹配，请重新输入！</h2>";
}



?>