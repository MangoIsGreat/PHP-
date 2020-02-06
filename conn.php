<?php
// 定义连接mysql数据库服务器需要的变量：
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_dbname = 'student';
$db_port = 3306;
$charset = 'utf8';

// php连接数据库：
if (!$link = @mysqli_connect($db_host.":".$db_port, $db_user, $db_pass)) {
    echo "<h2>连接数据库失败！</h2>";
    echo "系统错误信息：".mysqli_connect_error();
    die();
}

// 连接数据库成功，选择当前数据库：
if (!mysqli_select_db($link, $db_dbname)) {
    echo "连接数据库{$db_dbname}失败！";
    die();
}

// 设置数据库返回数据字符集:
mysqli_set_charset($link, $charset);