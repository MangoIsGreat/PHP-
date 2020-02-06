<?php
// 包含连接数据库的公共文件：
require_once('./conn.php');

// 利用全局变量获取地址栏上的参数：
$id = $_GET['id'];

// 设置sql语句：
$sql = "delete from student where id = $id";

// 查询数据库：
if (mysqli_query($link, $sql)) {
    echo "<h2>id为{$id}的记录删除成功</h2>";
    // 告诉浏览器执行代码：3s后刷新数据，并跳转至list.php
    header("refresh:2;url=./list.php");
    // 终止程序向下执行：
    die();
} else {
    echo "<h2>id为{$id}的记录删除失败</h2>";
    header("refresh:2;url=./list.php");
    die();
}