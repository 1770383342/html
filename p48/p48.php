<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>九九乘法表</title>
</head>

<body style="font-size:16px; color:#000099; font-family:'微软雅黑'">
<table border="1" bordercolor="#000099" bordercolorlight="#000099" cellspacing="0">
<?php
for($a = 1;$a < 10;$a++){
	echo"<tr>";
	for($b =1;$b<=$a;$b++){
		echo"<td>";
		echo"$b*$a=".$b*$a;
		echo"</td>";
	}
	echo"</tr>";
}
?>
</table>
</body>
</html>