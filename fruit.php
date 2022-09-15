<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>价格表</title>
</head>
<style>
    table {
        margin: 200px auto;
    }

    table, td {
        border: 1px black solid;
        border-collapse: collapse;
    }

    table td {
        width: 130px;
        height: 30px;
        text-align: center;
    }

    .tableNum {
        color: red;
        font-weight: 600;
    }
</style>
<body>
<?php
$servername = "47.110.153.251"; //阿里云服务器
$username = "root";
$password = "123456";
$dbname = "phpStudy";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 因为我的数据库是utf8mb4字符集 所以设置一下就会避免出现中文？？的问题
mysqli_query($conn, "set names utf8mb4");
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "Mysql连接成功";

$sql = "SELECT * FROM `fruit`";
$result = $conn->query($sql);

//创建存储关联数组
$fruitArr = array();

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        $fruitArr [$row["fruit"]] = $row["price"];
    }
} else {
    echo "没有结果";
}
//关闭连接
$conn->close();

//打折力度
$discount = 0.7;

//计算结果

$fruitNameArr = array("苹果", "香蕉", "橘子"); //水果购买名单
$fruitNumArr = array(10, 20, 30); //水果购买个数

//价格
$result = 0;
$NumArrLength = count($fruitNumArr);
$NameArrLength = count($fruitNameArr);

for ($i = 0; $i < $NameArrLength; $i++) {
    $result = $fruitArr[$fruitNameArr[$i]] * $fruitNumArr[$i];
}

//最终结果
$totalPrice = $result * $discount;
?>
<table>
    <tr>
        <caption>水果价格总计</caption>
        <td>水果名称</td>
        <td>价格</td>
        <td>数量</td>
    </tr>
    <tr>
        <td>苹果</td>
        <td class="tableNum">  <?= $fruitArr["苹果"] ?>￥</td>
        <td class="tableNum"><?= $fruitNumArr[0] ?></td>
    </tr>
    <tr>
        <td>香蕉</td>
        <td class="tableNum"> <?= $fruitArr["香蕉"] ?>￥</td>
        <td class="tableNum"><?= $fruitNumArr[1] ?></td>
    </tr>
    <tr>
        <td>橘子</td>
        <td class="tableNum"><?= $fruitArr["橘子"] ?>￥</td>
        <td class="tableNum"> <?= $fruitNumArr[2] ?>  </td>
    </tr>
    <tr>
        <td colspan="3"><span style="margin-left: 250px">折扣力度</span> <span
                    style="color: red;font-weight: 600"><?= $discount ?></span></td>
    </tr>
    <tr>
        <td colspan="3"><span style="margin-left: 250px"> 最终价格:</span> <span
                    style="color: red;font-weight: 600"><?= $totalPrice ?></span></td>
    </tr>
</table>
</body>
</html>