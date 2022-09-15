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
echo "连接成功";


$sql = "SELECT * FROM `fruit`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["fruit"] . " " . " Price" . $row["price"] . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();






