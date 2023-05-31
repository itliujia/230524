<?php
$con = mysqli_connect('localhost', 'score', '123456');
$db = mysqli_select_db($con, 'score');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成绩查询</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        label {
            font-size: 24px;
            margin-right: 10px;
            margin-bottom: 10px;
            width: 100%;
            max-width: 400px;
        }

        input[type="text"],
        select {
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            background-color: #21add1;
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
        }

        input[type="submit"] {
            background-color: #21add1;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #21adff;
        }

        @media only screen and (min-width: 768px) {
            form {
                flex-wrap: nowrap;
            }

            label {
                width: auto;
                max-width: none;
            }

            input[type="text"],
            select {
                margin-right: 20px;
                margin-bottom: 0;
            }

            input[type="submit"] {
                margin-top: 0;
            }
        }

        .dashed-border {
            margin-top: 50px;
            border: 1px dashed black;
            padding: 0;
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
    </style>
</head>

<body>
    <div class="container">
        <h1>成绩查询系统</h1>
        <form action="" method="get">
            <label for="name">姓名</label>
            <input type="text" id="name" name="name">

            <label for="sid">学号</label>
            <input type="text" id="sid" name="sid">

            <label for="pwd">密码</label>
            <input type="text" id="pwd" name="pwd">
            <input type="submit" value="查询">
        </form>
    </div>

    <div class="dashed-border"></div>
    <?php
    $sid = $_GET['sid'];
    $name = $_GET['name'];
    $pwd = $_GET['pwd'];
    $sql = "SELECT * FROM Student WHERE sid='$sid' and name='$name' and pwd='$pwd'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if ($row) {

        $sql = "SELECT * FROM  Score  join  Course  on  Course.course_id =Score.course_id  where  Score.student_id = " . $sid;
        $result = mysqli_query($con, $sql);

        echo "<h1>" . $name . "同学，你的成绩如下：</h1>";

        echo "<table>";
        echo "<tr><th>学号</th><th>课程</th><th>成绩</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row["student_id"] . '</td>';
            echo '<td>' . $row["course_name"] . '</td>';
            echo '<td>' . $row["score"] . '</td></tr>';
        }
        echo "</table>";
        mysqli_close($con);


    } else {
        echo "<h2>信息不匹配，请重新输入！</h2>";
    }
    ?>


    <div class="dashed-border"></div>

    <a href="admin.php">后台管理</a>





</body>

</html>