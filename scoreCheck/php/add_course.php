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

        form {

            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            margin-top: 50px;
            margin: 50px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 95%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        textarea {
            height: 150px;
        }

        .button1 {
            background-color: #21add1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        .button1:hover {
            background-color: #21adff;
        }
    </style>
</head>

<body>
    <h1>成绩管理系统</h1>
    <ul>
        <li><a href="admin_home.php">学生管理</a></li>
        <li><a href="course.php" class="active">课程管理</a></li>
        <li><a href="score.php">成绩管理</a></li>
        <li><a href="index.php">退出登录</a></li>
    </ul>

    <div class="clear"></div>

    <form method="post" action="">
        <label for="course_id">课程ID：</label>
        <input type="text" name="course_id" required><br>
        <label for="course_name">课程名称：</label>
        <input type="text" name="course_name" required><br>
        <input type="submit" class="button1" value="提交">
    </form>
</body>

</html>


<?php

$course_id = $_POST['course_id'];
$course_name = $_POST['course_name'];
if ($course_id) {
    $insert = "insert into Course  (course_id,course_name)VALUES('$course_id','$course_name') ";
    if (mysqli_query($con, $insert)) {
        echo "<script>alert('添加成功！');window.location='course.php';</script>";
    } else {
        echo "<script>alert('添加失败，请重试');window.location='add_course.php';</script>";
    }
}

?>