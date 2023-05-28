<?php
/**数据库连接 */
header('Content-Type:text/html;charset=utf-8');
$con = mysqli_connect('localhost', 'library', '123456');
mysqli_query($con, "set names utf8");
$db = mysqli_select_db($con, 'library');