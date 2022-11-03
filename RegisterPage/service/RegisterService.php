<?php
include "mysqlConnection.php";
// 接收数据
$username = $_REQUEST["username"];
$password = $_POST["password"];
$passwordRepeat = $_POST["password_repeat"];
$email = $_POST["email"];


$userConf = [
    'host' => '47.110.153.251',
    'port' => 3306,
    'user' => 'root',
    'pass' => '123456',
    'database' => 'phptest',
    'charset' => 'utf8mb4',
];

$mysql = mysqlConnectionTools::connect($userConf);
if ($password == $passwordRepeat) {
    try {

        $sql = "INSERT INTO sys_user ( user_name, `password`, email )
VALUES ('{$username}','{$password}','{$email}')";
        $num = $mysql->conn->exec($sql);//返回受影响的记录条数,num为int类型
        $insertId = $mysql->conn->lastInsertId();//返回新增的主键ID
        if ($num > 0) {
            header("location:../RegisterSuccess.php");
        } else {
            header("location:../RegisterFail.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    header("location:../RegisterFail.php");
}
