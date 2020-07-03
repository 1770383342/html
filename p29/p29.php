<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>自定义函数</title>
</head>

<body>
<div align="center">
<?php
function example($num){
	return "$num * $num = ".$num * $num;
}//双引号中的变量会被替换成变量值
echo example(10);
?>
</div>
</body>
</html>