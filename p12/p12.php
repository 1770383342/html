<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>全局变量</title>
</head>

<body>
<?php
$a="hello php!";  //在自定义函数外部声明一个变量a
function example(){
	//自定义一个函数，名为example
	global $a;
	//使用global关键词声明并使用在函数外部定义的变量$a
	echo'在函数内部获得变量$a的值为：'.$a."<br>";
}
example();
?>
</body>
</html>