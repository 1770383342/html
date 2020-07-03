<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>戴老的会话验证实验</title>
</head>

<body>
<?php
echo '<font color="#f0f">var_dump显示$_COOKIE["PHPSESSID"]的值：</font>';
var_dump($_COOKIE["PHPSESSID"]);echo'<p>';
echo '<font color="#f0f">echo显示session_name()函数的值：</font>';
echo session_name();echo'<p>';
echo '<font color="#f0f">echo显示session_id()函数的值：</font>';
echo session_id();echo '<p>';
echo '<font color="#f0f">$_COOKIE["daizg"]="123"添加一个Cookie变量daizg</font>';echo '<p>';
$_COOKIE["daizg"]="123";
echo '<font color="blue">session_start();会话开始。。。</font>';echo '<p>';
session_start();
echo '<font color="#f0f">var_dump($_SESSION)后输出：</font>';
var_dump($_SESSION);echo '<p>';
echo '<font color="$f0f">var_dump($_COOKIE)后输出：</font>';
var_dump($_COOKIE);echo '<p>';
echo '<font color="#f0f">echo session_name()输出值：</font>';
echo session_name();echo '<p>';
echo '<font color="#f0f">echo session_id()输出值：</font>';
echo session_id();echo '<p>';
echo '<font color="#f0f">最后var_dump($_COOKIE["PHPSESSID"]输出值：</font>';
var_dump($_COOKIE["PHPSESSID"]);echo '<p>';
?>
Session运行了。。。
</body>
</html>