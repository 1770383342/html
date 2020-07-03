<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算两个时间的差值</title>
</head>

<body>
<div align="center">
<?PHP
$time1 = strtotime(date("Y-m-d H:i:s"));
$time2 = strtotime("2019-1-15 17:10:00");
$time3 = strtotime("2019-1-1");
$sub1 = ceil(($time2-$time1) / 3600); //60*60
$sub2 = ceil(($time3-$time1) / 86400);
//60*60*24
echo "离放假还有<font color=red> $sub1 </font>小时!!!";
echo "<p>";
echo "离2019年元旦还有<font color=red>$sub2 </font>天!!!";
?>
</div>
</body>
</html>