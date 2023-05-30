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

        p {
            color: #666;
            font-size: 24px;
            margin-bottom: 50px;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 20px;
            margin: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>

    <h1>
        <?php echo $_SESSION['user_name']; ?>,欢迎登录系统！
    </h1>
    <p>您已成功登录图书馆座位预定系统。</p>

    <a href="choice_seat.php"> <button>座位预定</button></a>
    <a href="my_seat.php"> <button>预定记录</button></a>
    <a href="index.php"> <button>退出登录</button></a>
</body>

</html>