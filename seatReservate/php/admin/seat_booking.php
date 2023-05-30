<?php
session_start();
header("Content-Type:text/html; charset=utf8");
session_start();
if (isset($_SESSION['islogin'])) {
} else {
    echo "你还未登录，请登录</a>";
    echo "<script>location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>欢迎来到后台</title>

    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 36px;
            margin-top: 50px;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #fff;
            background-color: #4CAF50;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #3e8e41;
        }

        .add {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>预定管理</h1>
    <div class="add">
        <a href="home.php"> 返回系统</a>
    </div>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>座位名称</th>
            <th>座位描述</th>
            <th>预定人</th>
            <th>操作</th>
        </tr>

        <?php
        include('../config.php');




        $sql = "SELECT *,users.name as user_name,seats.name as seats_name FROM seats  join  bookings  on  bookings.seat_id =seats.id  join users on users.id = bookings.user_id";


        $result = mysqli_query($con, $sql);


        // 遍历查询结果并输出表格
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["seats_name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["user_name"] . "</td>";
            echo "<td><a href='cancel_booking.php?seat_id=" . $row["seat_id"] . "'>取消</a></td>";
            echo "</tr>";
        }

        // 关闭连接
        mysqli_close($con);
        ?>
    </table>
</body>

</html>