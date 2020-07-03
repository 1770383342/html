<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取指定任意一天的时间</title>
</head>

<body>
<?php session_start();
date_default_timezone_set("Etc/GMT-8");//设置时区 当前为北京时区
if(isset($_POST["Submit"])){
	$dateH=date("H");//取当前时间的小时
	$datei=date("i");//取当前时间分钟
	$dates=date("s");//取当前时间的秒
	$month=$_POST["month"];
	$day=$_POST["day"];
	$year=$_POST["year"];
	$truedate=date("M-d-Y H:i:s",mktime($dateH,$datei,$dates,$month,$day,$year));//日期是键盘输入的，时间是电脑时钟上提取的
}
?>
<form id="form1" name="form1" method="post" action="">
<table width="546" border="5" cellpadding="5" cellspacing="5" bordercolor="#97c5f7">
<tr>
<td height="30" colspan="3" align="center"><span class="STYLE3">获取指定任意一天的时间</span></td>
</tr>
<tr>
<td width="81" align="center"><span class="STYLE1">输入日期：</span></td>
<td width="226" height="24"><span class="STYLE1">
<input name="year" type="text" id="year" size="5" />
年
<input name="month" type="text" id="month" size="3" />
月
<input name="day" type="text" id="day" size="3" />
日
</span>
</td>
<td width="73" align="center"><input name="Submit" type="submit" value="提交" /></td>
</tr>
<tr>
<td height="26" colspan="3" align="center"><span class="STYLE5">正确的日期为：<?php if(isset($truedate)){ echo $truedate;}?></span></td>
</tr>
<tr>
<td height="73" colspan="3" align="center"><div align="left"><span class="STYLE7">注意：(1)在输入数字的时候，其中的年可以是两位或四位数字，取值从0-69表示2000-2069年；70-99表示1970-1999年。(2)在time_t是32位有符号整数的系统中，年的有效范围是1901到2038.(3)目前所有的Windows系统都不支持负的时间戳。因此合法的年份范围只包括从1970到2038.</span></div></td>
</tr>
</table>
</form>
</body>
</html>