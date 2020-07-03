<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>elseif控制语句</title>
</head>

<body>
<div align="center">
<?php
$moth = date("n");  //返回月份，1~12
$today = date("j");  //返回日期，1~31
if($today >= 1 and $today <=10){
	//判断日期变量是否在1-10之间
	echo"今天是".$moth."月上旬".$today."日";
	//如果是，说明是上旬
}elseif($today > 10 and $today <=20){
	//否则判断日期变量是否在11-20之间
	echo"今天是".$moth."月中旬".$today."日";
	//如果是，说明是中旬
}else{
	//如果是一两个判断都是false,则输出默认值
	echo"今天是".$moth."月下旬".$today."日";
	//说明是本月的下旬
}
?>
</div>
</body>
</html>