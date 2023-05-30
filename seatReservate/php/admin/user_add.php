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

        form {
            margin: auto;
            width: 60%;
            background-color: white;
            padding: 50px;
            margin-top: 50px;
        }

        label {
            display: inline-block;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: left;
            width: 150px;
        }

        input[type=text],
        textarea,
        select {
            border-radius: 5px;
            font-size: 16px;
            padding: 10px;
            width: 70%;
            display: inline-block;
            margin-bottom: 10px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 20px;
            margin-top: 20px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <h1>添加用户</h1>
    <div class="add">
        <a href="home.php">返回系统</a>
    </div>
    <form method="POST" action="do_user_add.php">
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="stuno">学号：</label>
        <input type="text" id="stuno" name="stuno" required>
        <br><br>

        <label for="password">密码：</label>
        <input type="text" id="password" name="password" required>
        <br><br>
        <input type="submit" value="提交">
    </form>
</body>

</html>