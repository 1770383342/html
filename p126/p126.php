<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取文本框的信息</title>
</head>

<body>
<form name="form1" method="post" action="">
<table width="550" border="0">
<tr>
<td>用户名：</td>
<td><input type="text" name="user" size="20"></td>
<td>密&nbsp;&nbsp;码：</td>
<td><input name="pwd" type="password" id="pwd" size="20"></td>
<td><input name="submit" type="submit" id="submit" value="登录"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["submit"])){
	echo "您输入的用户名为：".$_POST["user"]."&nbsp;&nbsp;密码为：".$_POST["pwd"];
}
?>
</body>
</html>