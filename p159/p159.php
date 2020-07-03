<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算两个时间的差</title>
</head>
<body>
<table width="300" height="55" border="3" cellpadding="5" cellspacing="4">
<tr>
<td>距离老师的生日还有：<?php
$date=gmmktime();//此函数与mktime()函数功能和用法一样，只是输入参数上有一些区别
$str=gmmktime(0,0,0,11,1,2018);
$str2=$str-$date;
echo ceil($str2/86400);//60*60*24=86400
?>天</td>
</tr>
</table>

</body>
</html>