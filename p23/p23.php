<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>算术运算符的简单应用</title>
</head>

<body>
<?php
$a = -100;  //声明变量$a
$b = 50;  //声明变量$b
$c = 30;  //声明变量$c
$d = -30;  //声明变量$d
echo "\$a = ".$a.",";  //输出变量
echo "\$b = ".$b.",";
echo "\$c = ".$c.",";
echo "\$d = ".$d."<p>";
//四则和求模运算
echo "\$a + \$b = ".($a + $b)."<br>";
//计算变量$a加$b的值
echo "\$a - \$b = ".($a - $b)."<br>";
//计算变量$a减$b的值
echo "\$a * \$b =".($a * $b)."<br>";
//计算变量$a乘$b的值
echo "\$a / \$b =".($a / $b)."<br>";
//计算变量$a除以$b的值
echo "\$a % \$c =".($a % $c)."<br>";
//计算变量$a和$c的余数，被除数为-10
echo"\$a++ = ".$a++." ";
//对变量$a进行后置递增运算
echo "运算后\$a的值为：".$a."<br>";
echo"\$b-- =".$b--." ";
//对变量$b进行后置递减运算
echo "运算后\$b的值为：".$b."<br>";
echo "++\$c = ".++$c." ";
//对变量$c进行前置递增运算
echo "运算后\$c的值为：".$c;
?>
</body>
</html>