<?php
/* 连接数据库账户信息 */
$conn = mysql_connect("localhost", "proj", "1234567890") or die("数据库链接错误");
/* 连接数据库名称  */
mysql_select_db("weibo", $conn); 
mysql_query('set autocommit=1', $conn);
mysql_query("SET NAMES 'utf-8'"); 
?>