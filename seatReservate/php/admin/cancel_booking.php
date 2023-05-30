<?php
if (!isset($_SESSION)) {
    session_start();
}
include('../config.php');
$seat_id = $_GET['seat_id'];
$delete = "delete from bookings where seat_id = '$seat_id'";
if (mysqli_query($con, $delete)) {
    $update = "UPDATE seats SET status=0 WHERE id=$seat_id;";
    mysqli_query($con, $update);
    echo "<script>alert('取消成功');window.location='seat_booking.php';</script>";

} else {
    echo "<script>alert('取消失败！');window.location='seat_booking.php';</script>";
}