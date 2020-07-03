<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录页面</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php session_start(); ?>
<!--有时这句代码也放在文件顶-->
<table width="328" border="3px" bordercolor="#ff0000" align="center" cellpadding="0" cellspacing="0">
<tr>
<td height="100"></td>
</tr>
<tr>
<td height="214" valign="top" background="images/index_01.jpg">
<form id="form1" name="form1" method="post" action="common.php?<?=session_name();?>=<?=session_id();?>">
<!--"common.php?<?echo session_id();?>">,相当于action="common.php?PHPSESSID='PHPSESSID值'",在网页文件名后面传变量-->
<table width="100%" height="171" border="2" bordercolor="#00aa00" cellpadding="0" cellspacing="0">
<tr>
<td width="200" height="60"></td><td>&nbsp;</td>
</tr>
<tr>
<td align="right" align="white12">用户名：</td>
<td><input name="username" type="text" size="15"/></td></tr>
<tr>
<td align="right" class="white12">密&nbsp;码：</td>
<td><input name="password" type="password" size="15"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td valign="bottom"><input type="submit" name="Submit" value="登录"/>
<input type="reset" name="Submit2" value="取消"/>
</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<body>
</body>
</html>