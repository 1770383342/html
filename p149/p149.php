<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>getdate()函数获取时间日期信息</title>
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
$arr = getdate();//这是一个日期时间数组
echo $arr["year"]."-".$arr["mon"]."-".$arr["mday"]." ";
echo $arr["hours"].":".$arr["minutes"].":".$arr["seconds"]." ".$arr["weekday"];
echo "<p>";
echo "Today is the $arr[yday]th of year";
?>
</div>
</body>
</html>