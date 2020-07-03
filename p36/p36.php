<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>取消引用</title>
</head>

<body>
<?php
$num = 1234;   //声明一个整型变量
$math = &$num;  //声明一个对变量$num的引用$math
echo "\$math is: ".$math."<br>";
//输出引用$math
unset($math);  //注销$math变量
echo "\$math is: "."<br>";
//再次输出$math变量，报错。因为$math变量不存在了
echo "\$num is: ".$num;
//输出原变量
?>
</body>
</html>