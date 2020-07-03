<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>函数的返回值</title>
</head>

<body>
<?php
function values($price,$tax=0.45){
	//定义函数values,$tax形参默认值为0.45
	$price = $price + ($price * $tax);
	//计算物品金额
	return $price; //返回金额
}
echo values(100);  //调用函数
?>
</body>
</html>