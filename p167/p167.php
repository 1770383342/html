<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>测试Session的有效性</title>
</head>

<body>
<?php
$time = 1*60; //设置session失效时间
session_set_cookie_params($time);
//设置Cookie变量PHPSESSID的有效时间为1分钟。此函数必须在建立会话之前设置。
session_start();//创建会话，在服务器上生成$_SESSION数组，同时系统把cookie里的PHPSESSID变量值当做会话id号，而PHPSESSID便令的有效时间当做session（会话）的有效时间。
$_SESSION["username"] = 'mr';//注册一个会话变量username
if($_SESSION["username"] !="")
{
	//如果会话变量username不存在会报错。使用!empty($_SESSION["username"])时即使username变量不存在，也不会报username变量不存在的错误。
	echo "<a href='session.php'>请点击我查看是否失效！</a>";
}else{
	echo "没有设置SESSION";
}
?>
</body>
</html>