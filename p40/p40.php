<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>if条件语句</title>
</head>

<body>
<?php
$num = rand(1,31); //使用rand()函数生成一个1~31的随机整数
if($num % 2 == 0){
	//判断变量$num是否为偶数
	echo"\$num = $num";
	//如果为偶数，输出表达式和说明文字
	echo"<br>$num 是偶数。";
}
?>
</body>
</html>