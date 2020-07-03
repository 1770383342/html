<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算页面的运行时间</title>
</head>

<body>
<div align="center">
<?php
function run_time()
{
	list($msec, $sec) = explode(" ", microtime());
	return((float)$msec + (float)$sec);
	//两部分时间转换成浮点数后相加
}
$start_time = run_time();
$time1 = strtotime(date("Y-m-d H:i:s"));
$time2 = strtotime("2019-1-15 17:10:00");
$time3 = strtotime("2019-1-1");
$sub1 = ceil(($time2 -$time1) /3600); //60*60
$sub2 = ceil(($time3 - $time1) / 86400); //60*60*24
echo "离放假还有<font color=red> $sub2 </font>天!!!";
echo "<p>";
echo "离2019年元旦还有<font color=red>$sub2</font>天!!!";
$end_time = run_time();
?>
<p>
该示例的运行时间为<font color=blue><?php echo($end_time -$start_time);?></font>秒
</p>
</div>
</body>
</html>