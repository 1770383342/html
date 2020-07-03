<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>对URL传递的参数进行解码</title>
</head>

<body>
<a href="">PHP编程词典</a>
<?php
if(isset($_GET["id"])){
	echo "您提交的查询字符串的内容:".urldecode($_GET["id"]);}
	?>
</body>
</html>