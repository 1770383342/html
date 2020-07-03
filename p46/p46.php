<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用for循环计算10的阶乘</title>
</head>

<body>
<?php
$sum = 1;
for($i=1;$i<101;$i++){
	$sum *= $i;
}
echo "100!= ".$sum;
?>
</body>
</html>