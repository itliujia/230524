<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书馆座位预定系统</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 3px;
            background-color: #f2f2f2;
            font-size: 16px;
            color: #555;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>注 册 账 号</h1>
        <form method="post" action="do_register.php" id="login">
            <label for="stuno">学号:</label>
            <input type="text" id="stuno" name="stuno">

            <label for="name">姓名:</label>
            <input type="text" id="name" name="name">

            <label for="password">密码:</label>
            <input type="password" id="password" name="password">

            <button type="submit">注 册</button>
            <p> <a href="index.php">登录系统</a></p>

        </form>
    </div>
</body>

</html>