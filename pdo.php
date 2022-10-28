<?php
$servername = '47.110.153.251';
$username = 'root';
$password = '123456';
$dbname = "phptest";
// 创建链接
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo '数据库连接成功';
} catch (PDOException $e) {
    echo $e->getMessage();
}

return $conn;




//$conn = null; // 断开连接
