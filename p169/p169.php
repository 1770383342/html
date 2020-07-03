<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用setcookie()函数设置SESSION变量的有效时间</title>
</head>

<body>
<?php
session_start();
$time = 1*60; //给出session失效时间60秒
setcookie(session_name(),session_id(),time()+$time,"/");
//session_name()函数返回PHPSESSID字符串，session_id()函数返回session id号，setcookie()函数重新创建了一个与原来的值完全一样的PHPSESSID变量，只是失效时间不同。原来的变量PHPSESSID失效时间是会话时，而现在的变量只有60秒。
$_SESSION['user'] = "mr"; //注册会话变量
//date_default_timezone_set("PRC");
//date_default_timezone_set("Etc/GMT-8");
//date_default_timezone_set("Asia/Chongqing");
//date_default_timezone_set("Asia/Shanghai");
//date_default_timezone_set("Asia/Urumqi");
//以上5句代码要分别使用一次，看时区是不是一样
$expiry = date("H:i:S");
if(isset($_SESSION)){ //如果$_SESSION数组存在
echo "<a href='session.php?time=$expiry'>存在SESSION请点击我！</a>";
}else{ echo "SESSION不存在"; }
?>
</body>
</html>