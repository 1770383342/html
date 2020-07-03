<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>还用strtotime函数比较两个时间的大小</title>
</head>

<body>
<div align="center">
<?php
$time1 = date("Y-m-d H:i:s");
$time2 = "2018-2-3 16:30:00";
echo "变量\$time1的时间为：".$time1."<br>";
echo "变量\$time2的时间为：".$time2."<p>";
if(strtotime($time1)-strtotime($time2) < 0){
	echo "\$time1 早于 \$time2";
}else{
	echo "\$time2 早于 $time1";
}
?>
</div>
</body>
</html>