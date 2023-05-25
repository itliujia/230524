<!DOCTYPE html>
<html>

<head>
    <title>图书馆座位预定系统 - 登录</title>
    <style type="text/css">
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 100px auto;
            max-width: 500px;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        input[type=text],
        input[type=password] {
            border: none;
            border-radius: 3px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            display: block;
            font-size: 16px;
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
        }

        input[type=submit] {
            background-color: #008CBA;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }

        input[type=submit]:hover {
            background-color: #005f6b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>图书馆座位预定系统 - 登录</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="用户名">
            <input type="password" name="password" placeholder="密码">
            <input type="submit" value="登录">
        </form>
    </div>
</body>

</html>