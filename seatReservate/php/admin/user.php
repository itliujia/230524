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
    <h1>用户管理</h1>
    <div class="add">
        <a href="user_add.php">添加用户</a>
        <a href="home.php"> 返回系统</a>
    </div>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>学号</th>
            <th>密码</th>
            <th>操作</th>
        </tr>

        <?php
        include('../config.php');




        $sql = "SELECT * FROM users";


        $result = mysqli_query($con, $sql);


        // 遍历查询结果并输出表格
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["stuno"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td><a href='user_edit.php?id=" . $row["id"] . "'>编辑</a> <a href='user_delect.php?id=" . $row["id"] . "'>删除</a></td>";
            echo "</tr>";
        }

        // 关闭连接
        mysqli_close($con);
        ?>
    </table>
</body>

</html>