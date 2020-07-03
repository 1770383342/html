<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用mktime()函数获取当前时间戳</title>
<style type="text/css">
<!--
body,td,th{
	font-size:12px;
}
body{
	margin-left:10px;
	margin-top:10px;
	margin-right:10px;
	margin-bottom:10px;
}
-->
</style>
</head>

<body>
<div align="center">
<?php
echo "mktime函数返回的时间戳：".mktime()."<p>";
echo "当前的日期为：".date("Y-m-d",mktime())."<p>";
echo "当前的时间为：".date("H:i:s",mktime());
?>
</div>
</body>
</html>