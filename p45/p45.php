<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>while语句和do...while语句的对比</title>
</head>

<body>
<div align="center">
<?php
$num = 1;
while($num != 1){
	echo"不会看到";
}
do{
	echo"会看到";
}while($num != 1);
//虽然条件不满足，但已经有一次循环
?>
</div>
</body>
</html>