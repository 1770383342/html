<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用switch语句判断星期几</title>
</head>

<body>
<table border="1" bordercolor="#000099" bordercolorlight="#000099" cellspacing="0"><tr><td>
<?php
$a = date("l");
//取出星期数，完整的文本格式，返回值Sunday~Saturday
switch($a){
	case "Monday";
	echo "今天是星期一，一周忙碌生活开始了";
	break;
	case "Tuesday";
	echo "今天是星期二，电视台下午两点以后部分休息";
	break;
	case "Wednesday";
	echo"今天是星期三，下午有乒乓球比赛";
	break;
	case "Thursday";
	echo "今天是星期四，晚上有NBA的重播";
	break;
	case "Friday";
	echo "今天是黑色星期五。。。。。。";
	break;
	case "Saturday";
	echo "今天是星期六，明天就放假了哈哈哈";
	break;
	case "Sunday";
	echo "今天是星期天，可以玩上一整天";
}
?>
</td></tr></table>
</body>
</html>