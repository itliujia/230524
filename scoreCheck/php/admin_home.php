<?php
$con = mysqli_connect('localhost', 'score', '123456');
$db = mysqli_select_db($con, 'score');
?>
<!DOCTYPE html>
<html>

<head>
    <title>成绩管理系统</title>
    <style>
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
            float: right;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        h1 {
            float: left;
            margin: 0;
            padding: 10px;
            color: #333;
        }

        .active {
            color: #21add1;
        }

        .clear {
            clear: both;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            font-size: 14px;
            width: 100%;
        }

        th {
            background-color: #21add1;
            color: white;
            padding: 10px;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            text-align: center;
        }

        .add {
            color: #fff;
            background-color: #21add1;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            float: right;
            margin-bottom: 20px;
        }

        .add:hover {
            background-color: #21adff;
        }
    </style>
</head>

<body>
    <h1>成绩管理系统</h1>
    <ul>
        <li><a href="admin_home.php" class="active">学生管理</a></li>
        <li><a href="#">科目管理</a></li>
        <li><a href="#">成绩管理</a></li>
        <li><a href="#">退出登录</a></li>
    </ul>

    <div class="clear"></div>

    <a class="add" href="add_student.php">添加学生</a>


    <?php
    $sql = "SELECT * FROM Student";
    $result = mysqli_query($con, $sql);
    echo "<table>";
    echo "<tr><th>ID</th><th>学号</th><th>姓名</th><th>查询密码</th><th>操作</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["sid"] . "</td><td>" . $row["name"] . "</td><td>" . $row["pwd"] . "</td><td><a href='student_edit.php?id=" . $row["id"] . "'>编辑</a> | " . "<a href='student_delete.php?id=" . $row["id"] . "'>删除</a>" . "</td></tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>