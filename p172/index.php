<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>博客用户登录</title>
<style type="text/css">
<!--
.style {
	color:#ff0000;
}
-->
</style>
</head>

<body>
<script language="javascript">
function check(form){
	if(form.user.value==""){
		alert("请输入用户名");
		form.user.focus(); return false;
	}
	if(form.pwd.value==""){
		alert("请输入密码");
		form.pwd.focus();return false;
	}
	form.submit();
}
</script>
<form name="form1" method="post" action="default.php">
<table width="521" height="394" border="0" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" background="images/login.jpg"><table width="521" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="262" height="218">&nbsp;</td>
<td width="259">&nbsp;</td>
</tr>
<tr>
<td height="24" align="right">用户名：</td>
<td height="24" align="left"><input name="user" type="text" id="user" size="20"></td>
</tr>
<tr>
<td height="24" align="right">密&nbsp;码：</td>
<td height="24" align="left"><input name="pwd" type="password" id="pwd" size="20"></td>
</tr>
<tr align="center">
<td height="24" colspan="2"><input type="button" name="Submit" value="提交" onClick="return check(form1);">
&nbsp;&nbsp;
<input type="reset" name="Submit2" value="重填"></td>
</tr>
<tr>
<td height="76" align="right"><span class="style1">超级用户：tsoft<br>密&nbsp;&nbsp;&nbsp;&nbsp;码：111&nbsp;&nbsp;</span></td>
<td><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;普通用户：zts<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;&nbsp;码：000</span></td>
</tr>
</table></td>
</tr>
</table>
</form>
</body>
</html>