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
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <title>登录界面</title>
</head>
<body style="background-image: url(img/background.png);">
<div id="main-windows">

    <div style="margin: 20px auto;height: 50px">
        <div style="font-size: 30px;color: black;font-weight: 600">欢迎登录</div>
        <div style="color: black">
            <p>邮箱:<input id="email" type="text"></p>

            <p>密码:<input id="password" type="password" placeholder="密码长度至少为6位"></p>
        </div>
        <div style="text-align: center;margin-top: 30px;">
            <input type="button" class="button" value="登录" ">
            <input type="button" class="button" value="注册" ">
        </div>
        <div></div>
    </div>

</div>


</body>
</html>