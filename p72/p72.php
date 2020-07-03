<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用number_format()函数对指定的数字字符串进行格式化</title>
</head>

<body>
<?php
$number=1868.96;   //定义数字字符串常量
echo number_format($number);  //输出格式化后的数字字符串
echo "<br>";  //执行换行
echo number_format($number,2);  //输出格式化后的数字字符串
echo "<br>";  //执行换行
$number2 = 11886655.760055;  //定义数字字符串常量
echo number_format($number2,2,'.','.');    //输出格式化后的数字字符串
?>
</body>
</html>