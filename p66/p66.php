<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用strncmp()函数比较字符串的前2个字符是否与源字符串相等</title>
</head>

<body>
<?php
$str1="I like PHP !"; //定义字符串常量
$str2="i am fine !"; //定义字符串常量
echo strncmp($str1,$str2,2); //比较前2个字符，输出-1
?>
</body>
</html>