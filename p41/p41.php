<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>if...else条件语句</title>
</head>

<body>
<?php
$num = rand(1,31);
//使用rand()函数生成一个随机数
if($num % 2 == 0){  //判断变量$num是否为偶数
echo "变量$num 是偶数。";
//如果为偶数，输出“变量$num为偶数”
}else{
	echo"变量$num 为奇数。";
	//如果为奇数，输出“变量$num为奇数”
}
?>
</body>
</html>