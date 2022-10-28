<?php
include "mysqlConnection.php";
//include "pdo.php";

$userConf = [
    'host' => '47.110.153.251',
    'port' => 3306,
    'user' => 'root',
    'pass' => '123456',
    'database' => 'phptest',
    'charset' => 'utf8mb4',
];


$mysql = mysqlConnectionTools::connect($userConf);

try {
    $sql = "SELECT * FROM `sys_user`";
    // 有返回结果集，使用query函数，该函数返回结果为预处理对象。
    $stmt = $mysql->conn->query($sql);
    // 查询多条数据,设置返回为关联数组
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($res as $v) {
        echo 'id为：' . $v['id'] . ',名字为：' . $v['user_name'] . ',密码为：' . $v['password'];
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


