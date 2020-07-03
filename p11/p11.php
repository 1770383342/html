<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>局部变量</title>
</head>

<body>
<?php
function example(){
	$a="hellp php!";
	//在自定义函数example()中定义变量a
	echo"在函数内部定义的变量a的值为：".$a."<br>";
}
example();
$a="hello China!";  //在函数外部定义变量a
echo"在函数外部定义的变量a的值为：".$a."<br>";
example();
?>
</body>
</html>