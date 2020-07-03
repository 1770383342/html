<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用list()函数和each()函数将存储在数组中的图书名称和作者获取出来</title>
</head>

<body>
<form name="form1" method="post">
<table width="600" border="1" cellpadding="1" cellspacing="1" bordercolor="#66cc33" bgcolor="#fff">
<tr>
<td width="95" height="30" align="right" bgcolor="#ccff33">图书名称：</td>
<td width="479" height="30" bgcolor="#ccff33">&nbsp;
<input name="图书名称" type="text" class="inputcss" id="图书名称" size="24">
作者：<input name="作者" type="text" class="inputcss" id="作者" size="16">
&nbsp;
<input name="submit" type="submit" value="查询"></td>
</tr>
</table>
</form>
<?php
//输出用户登录信息
//var_dump($_POST);//看不懂全局数组$_POST结构时可以用此句代码
while(list($name,$value)=each($_POST)){
	if($name!="submit"){
		echo "$name=$value<br>";
	}
}
?>
</body>
</html>