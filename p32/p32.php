<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>可选参数，默认值</title>
</head>

<body>
<?php
function values($price,$tax=""){
	$price = $price + ($price * $tax);
	echo "价格:$price<br>";
}
values(100,0.25);  //为可选参数赋值0.25
values(100);       //没有给可选参数赋值
?>
</body>
</html>