<?php
include "mysqlConnection.php";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <title>注册界面</title>


</head>
<body style="background-image: url(img/background.png);">
<div id="main-windows" >

    <div style="margin: 20px auto;height: 50px">
        <div style="font-size: 30px;color: black;font-weight: 600;display: flex">
            <p style="margin: 30px auto">欢迎注册</p>
        </div>
        <form action="register.php" method="post">
            <div class="username_password" style="color: black;margin-left: 220px;">
                <div class="input_div"><label for="username">用户名:</label><input id="username" type="text"></div>
                <div class="input_div"><label for="password">密码:</label><input id="password" type="text"
                                                                                 placeholder="密码长度至少为10位">
                </div>
                <div class="input_div"><label for="password">再次确认：</label><input id="password" type="text"
                                                                                     placeholder="请再次确认"></div>
                <div class="input_div"><label for="email">邮箱地址:</label><input id="email" type="password">
                </div>
            </div>

            <div style="text-align: center;margin-top: 80px;">
                <button class="button1">点击注册</button>
            </div>
        </form>
    </div>
    <div style="margin: 395px 0 0 640px">
        <div style="text-decoration:underline;font-size: 15px;color: #7faae7;">
            <a href="register.php">已有帐号？前往登录</a>
        </div>
    </div>

</div>


</body>
</html>