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

        .nooo {
            border: none;
            outline: none;
        }
    </style>
</head>

<body>
    <h1>成绩管理系统</h1>
    <ul>
        <li><a href="admin_home.php">学生管理</a></li>
        <li><a href="course.php">课程管理</a></li>
        <li><a href="score.php" class="active">成绩管理</a></li>
        <li><a href="index.php">退出登录</a></li>
    </ul>

    <div class="clear"></div>

    <form method="get" action="" class="add">
        <label for="course_id">课程：</label>
        <select id="course_id" name="course_id">
            <?php
            $sql = "SELECT * FROM Course";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row["course_id"] . "'>" . $row["course_name"] . "</option>";
            }
            ?>
        </select>
        <input type="submit" class="button1" value="查询">
    </form>

    <?php
    $course_id = $_GET['course_id'];
    if (!$course_id)
        $course_id = 1001;
    $sql = "SELECT * FROM score  right join  student  on  student.sid =score.student_id  and  score.course_id = " . $course_id;

    $result = mysqli_query($con, $sql);
    echo "<table>";
    echo "<tr><th>学号</th><th>学生姓名</th><th>成绩</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row["sid"] . '</td>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td>' . $row["score"] . ' | ';
        echo '<a href="score_save.php?score_id=' . $row["score_id"] . '&sid=' . $row["sid"] . '&score=' . $row["score"] . '&course_id=' . $course_id . '&name=' . $row["name"] . '">编辑</a></td></tr>';
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>