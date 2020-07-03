<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>静态变量</title>
</head>

<body>
<?php
function example(){
	static $a=0;  //定义静态变量，第一次使用有效。如果$a存在，此语句失效，不再重新定义$a变量
	$a+=1;
	echo"静态变量a的值为：".$a."<br>";
}
function zy(){
	$b=10;   //定义局部变量，每次运行此语句都要重新定义一次$b变量
	$b+=1;
	echo"局部变量b的值为：".$b."<br>";
}
example();  //一次执行该函数体
example();  //二次执行该函数体
example();  //三次执行该函数体
zy();  //一次执行该函数体
zy();  //二次执行该函数体
zy();  //三次执行该函数体
?>
</body>
</html>