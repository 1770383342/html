<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>比较运算符的应用</title>
</head>

<body>
<div align="left">
<?php
$value="100";  //定义了一个字符串变量
echo "\$value = \"$value\"";  //显示$value="100"
echo "<br>\$value==100:";
var_dump($value==100);  //检测$value==100的值，结果为：bool(true),说明关系表达式"100"==100为true
echo "<br>\$value==true:";
var_dump($value==true);  //检测$value==true的值，结果为：bool(true),说明"100"直接转换为true
echo "<br>\$value!=null:";
var_dump($value!=null);  //检测$value!=null的值，结果为：bool(true),说明"100"是有东西的，不是空null
echo"<br>\$value==false:";
var_dump($value==false);  //检测$value==false的值，结果为：bool(false),因为"100"转换为true
echo "<br>\$value ==100:";
var_dump($value==100);  //检测$value==100的值，结果为：bool(false),"100"是字符串，不是数值。
echo "<br>\$value==true:";
var_dump($value==true);  //检测$value==true的值，结果为：bool(false),"100"可以转换为true，但在恒等符里认为类型不对，不相等。
echo"<br>(10/2.0 !==5):";
var_dump(10/2.0 !==5);  //检测10/2.0 !=5的值，结果为bool(true),10*2.0是实数，虽然也是5，但不是整数，在!==运算符下虽然数字相等但数据类型不相等时也是不相等，所有运行结果为true.
?>
</div>
</body>
</html>