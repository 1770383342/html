<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取下拉列表框的值</title>
<style type="text/css">
<!--
.style2{
	font-size:13px;
}
body,td,th{
	font-size:12px;
}
body{
	margin:5px 0px 0px 5px;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
<table width="280" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="80" height="25" align="center"><span class="style2">意见主题：</span></td>
<td width="194">
<select name="select" size="1"><!--菜单列表，也叫组合列表框-->
<option value="公司发展" selected>公司发展</option>
<option value="管理制度">管理制度</option>
<option value="后勤服务">后勤服务</option>
<option value="员工薪资">员工薪资</option>
</select>&nbsp;&nbsp;
<input type="submit" name="submit" value="提交"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["submit"])){
	echo "您选择的意见主题为：".$_POST["select"];
}
?>
</body>
</html>