<?php
$con = mysqli_connect('localhost', 'score', '123456');
$db = mysqli_select_db($con, 'score');

$id = $_GET['id'];
$sql = "SELECT * FROM Student WHERE id=" . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

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
        <li><a href="admin_home.php" class="active">学生管理</a></li>
        <li><a href="#">科目管理</a></li>
        <li><a href="#">成绩管理</a></li>
        <li><a href="#">退出登录</a></li>
    </ul>

    <div class="clear"></div>

    <form method="post" action="">
        <label for="sid">ID:</label>
        <input type="text" name="id" readonly value="<?php echo $row["id"]; ?>"><br>
        <label for="sid">学号：</label>
        <input type="text" name="sid" required value="<?php echo $row["sid"]; ?>"><br>
        <label for="name">姓名：</label>
        <input type="text" name="name" required value="<?php echo $row["name"]; ?>"><br>
        <label for="pwd">查询密码：</label>
        <input type="text" name="pwd" required value="<?php echo $row["pwd"]; ?>"><br>
        <input type="submit" class="button1" value="提交">
    </form>
</body>

</html>


<?php
$id = $_POST['id'];
$sid = $_POST['sid'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
if ($sid) {
    $update = "UPDATE Student SET name='$name', sid='$sid',pwd='$pwd' WHERE id=$id;";
    if (mysqli_query($con, $update)) {
        echo "<script>alert('修改成功！');window.location='admin_home.php';</script>";
    } else {
        echo "<script>alert('修改失败，请重试');window.location='student_edit.php';</script>";
    }
}

?>