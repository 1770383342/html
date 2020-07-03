<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>字符串转换为整数</title>
</head>

<body>
<?php
$num = '3.1415926r*r'; //声明一个字符串变量
echo'使用(integer)操作符转换变量$num类型：';
echo (integer)$num;  //使用intger转换类型，只取小数点前面的整数
echo'<p>';
echo'输出变量$num的值：'.$num;
//输出原始变量$num
echo'<p>';
echo'使用settype函数转换变量$num类型为integer:';
echo settype($num,'integer');  //使用settype函数转换类型，函数返回值为1，表示true,转换成功
echo'<p>';
echo '输出变量$num的值：'.$num;   //输出转换后的变量$num,只取小数点前面的整数
?>
</body>
</html>