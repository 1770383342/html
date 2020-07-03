<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用break跳出循环</title>
</head>

<body>
<?php
while(true){
	//使用while循环
	$tmp = rand(1,20);  //声明一个随机数变量$tmp
	echo $tmp." ";  //输出随机数
	if($tmp == 10){
		//判断随机数是否等于10
		echo"<p>变量等于10，终止循环";
		break;
		//如果等于10，使用break语句跳出循环.
	}
}
?>
</body>
</html>