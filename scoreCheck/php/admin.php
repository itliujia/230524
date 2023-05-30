<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>后台系统</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .login-box {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #21add1;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #21adff;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h1>登录系统</h1>
        <form action="login.php" method="get">
            <label>用户名:</label>
            <input type="text" name="admin_name" required>
            <label>密码:</label>
            <input type="password" name="password" required>
            <input type="submit" value="登录">
        </form>
    </div>
</body>

</html>