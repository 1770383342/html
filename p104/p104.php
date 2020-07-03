<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用list()函数遍历数组</title>
</head>

<body>
<form name="form1" method="post">
<table width="323" border="1" cellpadding="1" cellspacing="1" bordercolor="#66cc33" bgcolor="#fff">
<tr>
<td width="118" height="24" align="right" bgcolor="#ccff33">用户名：</td>
<td width="192" height="24" bgcolor="#ccff33"><input name="user" type="text" id="user" size="24"></td>
</tr>
<tr>
<td height="24" align="right" bgcolor="#ccff33">密&nbsp;&nbsp;码：</td>
<td height="24" bgcolor="#ccff33"><input name="pwd" type="password" id="pwd" size="24"></td>
</tr>
<tr align="center" bgcolor="#ccff33">
<td height="24" colspan="2"><input name="submit" type="submit" value="登录"></td>
</tr>
</table>
</form>
<?php
//输出用户登录信息
if(isset($_POST["submit"])){  //没有这句代码在打开页面是会报错，说没有$_POST数组。
echo '$_POST数组：';var_dump($_POST);
echo '<p>';
while(list($name,$value)=each($_POST)){
	if($name!="submit"){
		//echo "$name=$value<br>";
		echo $name.'='.$value.'<br>'; //这两句代码功能一样
	}
}
}
?>
</body>
</html>