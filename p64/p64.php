<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用strcmp()和strcasecmp()函数分别对两个字符串按字节进行比较</title>
</head>

<body>
<?php
$str1="明日编程词典!";//定义字符串常量
$str2="明日编程词典!";//定义字符串常量
$str3="mrsoft";//定义字符串常量，小写字母大于大写字母
$str4="MRSOFT";  //定义字符串常量
echo strcmp($str1,$str2); //这两个字符串相等
echo '<p>';
echo strcmp($str3,$str4);//注意该函数区分大小写
echo '<p>';
echo strcasecmp($str3,$str4); //该函数不区分字母大小写
?>
</body>
</html>