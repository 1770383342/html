<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用is_numeric()函数检测变量是否为数字</title>
</head>

<body>
<div align="center">
<?php
$boo = "043112345678";
//声明一个全由数字组成的字符串变量
if(is_numeric($boo))
//判断该变量是否为数字组成。
echo"Yes,the \$boo a phone number: $boo!";
//如果是，输出该变量
else
echo"Sorry, this is an error!";
//否则，输出错误语句
?>
</div>
</body>
</html>