<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>布尔类型和字符串类型</title>
</head>

<body>
<div align="center">
<?php
$boo = true;
if($boo)
echo'变量$boo为真！';
else
echo'变量$boo为假!!';
echo"<p>";
$i='只会看到一遍';//声明一个字符串变量
echo"$i";   //用双引号输出，变量$i中的值将被替换出来，输出的内容是变量存储的值
echo"<p>";
//输出段标记
echo'$i';   //用单引号输出，不替换变量$i中的值，按普通字符串输出
?>
</div>
</body>
</html>