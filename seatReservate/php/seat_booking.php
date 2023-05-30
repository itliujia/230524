<?php
if (!isset($_SESSION)) {
    session_start();
    $_SESSION['id'] = 2;
}
include('config.php');
$seat_id = $_GET['seat_id'];
$user_id = $_GET['user_id'];
$insert = "insert into bookings (seat_id,user_id)VALUES('$seat_id','$user_id') ";
if (mysqli_query($con, $insert)) {
    $update = "UPDATE seats SET status=1 WHERE id=$seat_id;";
    mysqli_query($con, $update);
    echo "<script>alert('预定成功');window.location='choice_seat.php';</script>";

} else {
    echo "<script>alert('预定失败！');window.location='choice_seat.php';</script>";
}