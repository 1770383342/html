<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用while循环输出10以内的偶数</title>
</head>

<body>
<div align="center">
<?php
$num = 1;
$str = "10以内的偶数为：";
while($num<11){
	if($num % 2 == 0){
		$str .= $num." ";
	}
	$num++;
}echo $str;
?>
</div>
</body>
</html>