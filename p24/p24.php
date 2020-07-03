<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>字符串运算</title>
</head>

<body>
<div align="center">
<?php
$n = "3,1415926r*r"; //声明一个以数字开头的字符串变量
$m =1;  //声明一个整型变量
$nm = $n.$m;  //使用"."运算符将两个变量连接起来，虽然$m变量是整型，但在","运算时自动变成字符串。
echo $nm."<br>";  //输出结果
$mn = $m + $n;  //使用"+"运算符将两个变量连接
echo $mn . "<br>";  //输出结果
?>
</div>
</body>
</html>