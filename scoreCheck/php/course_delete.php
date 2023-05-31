<?php
$con = mysqli_connect('localhost', 'score', '123456');
$db = mysqli_select_db($con, 'score');
$id = $_GET['id'];
$delete = "delete from Course where course_id = '$id'";
if (mysqli_query($con, $delete)) {
    echo "<script>alert('删除成功！');window.location='course.php';</script>";
} else {
    echo "<script>alert('删除失败，请重试')</script>";
}