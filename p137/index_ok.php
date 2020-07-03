<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>对GET方法传递的参数进行解码</title>
</head>

<body>
<?php
if(isset($_GET["id"])){
	echo urldecode($_GET["id"]);}
	?>
</body>
</html>