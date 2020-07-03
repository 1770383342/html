<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
//XAMPP虚拟机和大宇服务器的mysql服务器用户和密码一样，数据库名一样。
$conn=mysql_connect("localhost:3306","a0919135421","99965929") or die("数据库服务器连接错误".mysql_error());
mysql_select_db("a0919135421",$conn) or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
?>
</body>
</html>