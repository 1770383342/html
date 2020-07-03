<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>预定义常量（时间日期）</title>
<style type="text/css">
<!--
body,td,th{
	font-size:12px;
}
body{
	margin:10px;
}
-->
</style>
</head>

<body>
<div align="center">
<?php
/* 使用预定义常量输出不同格式的时间和日期 */
echo "DATE_ATOM =".date(DATE_ATOM);
echo "<p>DATE_COOKIE = ".date(DATE_COOKIE);
echo "<p>DATE_ISO8601 = ".date(DATE_ISO8601);
echo "<p>DATE_RFC822 = ".date(DATE_RFC822);
echo "<p>DATE_RFC850 = ".date(DATE_RFC850);
echo "<p>DATE_RSS = ".date(DATE_RSS);
echo "<p>DATE_W3C = ".date(DATE_W3C);
?>
</div>
</body>
</html>