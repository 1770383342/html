<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
//XAMPP虚拟机和大宇服务器共用
//$link=mysqli_connect(mySQL服务器地址，用户名，密码，数据库，接口）；
//$link=mysqli_connect(mySQL服务器地址，用户名，密码，数据库，接口);
$mysqli=new mysqli("localhost","a0919135421","99965929","a0919135421") or die("数据库服务器连接错误".mysql_error());
//mysqli_query($link,"set names utf8");
?>
</body>
</html>