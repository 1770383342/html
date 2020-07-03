<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算两个时间的差</title>
</head>
<?php date_default_timezone_set("Etc/GMT-8"); ?><!--设置默认时间为北京时间-->
<body>
<table width="300" height="55" border="3" cellpadding="5" cellspacing="4">
<tr>
<td>距离下班时间还有<?php
$dateY=date("Y");//提取电脑时钟的年份
$datem=date("m");//提取电脑时钟的月份
$dated=date("d"); //提取电脑时钟的每月的天数
$dates1=mktime(17,10,0,$datem,$dated,$dateY);
//17:10:00下班
$dates2 = mktime();
$dates3 = $dates1-$dates2;
echo ceil($dates3/3600);
?>小时。</td>
</tr>
</table>
</body>
</html>