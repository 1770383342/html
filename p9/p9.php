<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP变量赋值</title>
</head>

<body>
<?php
echo'下面是传值赋值实验：';
echo'<br><br>';
$a=10;
$b=$a;
$b=$b+40;  //重新给变量$b赋值，$a变量中的内容不变
echo'$a变量的值：'.$a;
//不能使用echo"$a变量的值：".$a;代码，否则会报错
echo'<br><br>';
echo'$b变量的值：'.$b;
//可以使用echo"b变量的值：".$b;,在字符串里b前不能添加$符
echo'<br><br>';
echo'提醒：在双引号里不能带$符的变量名。而单引号里可以带$符的变量名，这是变量名按常数字符串来处理';
echo'<br><br>';
echo'$b变量的值：'.$b;
echo'<br><br>';
echo'b变量的值：'.$b;
echo'<br><br>';
echo'结论：变量传值定义时，两个变量之间是独立的，给其中一个变量重新赋值，另一个变量值不变。';
echo'<br><br>';
echo'下面是引用赋值的实验：';
echo'<br><br>';
$aa=10;
$bb=&$aa;
$bb=$bb+40;//重新给变量$bb赋值，$aa变量中的内容要变
echo'$aa变量的值：'.$aa;
//不能使用echo"$aa变量的值：".$aa;代码，否则会报错
echo'<br><br>';
echo'$bb变量的值：'.$bb;
echo'<br><br>';
echo'结论：变量引用定义时，两个变量的地址指向同一个内存地址，两个变量其实是同一个变量，给其中一个重新赋值，另一个变量值也会同步改变。';
?>
</body>
</html>