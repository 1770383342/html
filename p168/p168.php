<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用setcookie()函数设置SESSION变量的有效时间</title>
</head>

<body>
<?php
session_start(); //创建Cookie变量PHPSESSID
$time = 1*60; //给出session有效时间1分钟
setcookie(session_name(),session_id(),time()+$time,"/");
//session_name()函数返回PHPSESSID字符串，而session_id()函数返回当前的session_id值。此语句的意思是：当以前的session_id号的值重建一个新的PHPSESSID变量，顺便修改了PHPSESSID变量的有效时间为1分钟。"/"表示有效路径在主页文档根目录下的所有子目录。
$_SESSION['user'] = "mr";
//创建（注册）了一个session变量，变量名为user,值为mr.
$expiry = date("H:i:s");
//取出创建user变量的时间
if(!empty($_SESSION)){
	echo "<a href='session.php?time=$expiry'>存在SESSION请点击我！</a>";
	//在网址地址后面用问号?附带变量和值：?time=$expiry
	//变量time要在PHP代码中用$_GET[]函数取出
}else{
	echo "SESSION不存在";
}
?>
</body>
</html>