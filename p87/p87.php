<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用正则表达式对用户注册信息进行验证</title>
<style type="text/css">
<!--
body,td,th{
	font-size:12px;
}
body{
	margin:0px;
}
a:link{
	text-decoration:none;
}
a:visited{ text-decoration:noen;}
a:hover{ text-decoration:noen;}
a:active{ text-decoration:noen;}
-->
</style>
<script src="js/check.js"></script>
</head>

<body>
<table width="756" height="229" border="5" align="center" cellpadding="0" cellspacing="0">
<tr><!--外表第一行，此行只有一个单元-->
<td height="229" colspan="2"><img src="images/bg_03.jpg" width="756" height="229" border="0" href="index.php"/></td>
</tr>
<tr><!--外表第二行，在第一单元里嵌入了表单和内标-->
<td width="565" height="364" align="center" valign="top"><form name="reg_check" method="post" action="index_ok.php" onSubmit="return chkreg(reg_check,'all')">
<table width="550" height="270" border="3" align="center" cellpadding="0" cellspacing="0">
<tr><!--内标第一行，第一个单元向右合并了3个单元-->
<td height="38" colspan="3" valign="bottom"><img src="images/bg_05.jpg" width="543" height="30"/></td>
</tr>
<tr><!--内表第二行-->
<td width="110" height="30"><div align="right">会员名：</div></td>
<td colspan="2" align="left">&nbsp;<input type="text" name="recuser" size="20" onBlur="chkreg(reg_check,0)">
<font color="#ff0000">*</font>&nbsp;
<div id="check_recuser" style="color:#f1b000"></div></td>
</tr>
<tr><!--内表第三行-->
<td height="30"><div align="right">详细联系地址：</div></td>
<td height="30" colspan="2" align="left">&nbsp;<input type="text" name="address" size="50" onBlur="chkreg(reg_check,1)">
<font color="#ff0000">*</font>&nbsp;
<div id="check_address" style="color:#f1b000"></div></td>
</tr>
<tr><!--内表第四行-->
<td height="30"><div align="right">邮政编码：</div></td>
<td height="30" colspan="2" align="left">&nbsp;<input type="text" name="postalcode" size="20" onBlur="chkreg(reg_check,2)"><div id="check_postalcode" style="color:#f1b000"></div></td>
</tr>
<tr><!--内表第五行-->
<td height="30"><div align="right">QQ号码：</div></td>
<td height="30" colspan="2" align="left">&nbsp;<input type="text" name="qq" size="20" onBlur="chkreg(reg_check,3)">
<font color="#ff0000">*</font>&nbsp;
<div  id="check_qq" style="color:#f1b000"></div></td>
</tr>
<tr><!--内表第六行-->
<td height="30"><div align="right">E-mail:</div></td>
<td height="30" colspan="2" align="left">&nbsp;<input type="text" name="email" size="20" onBlur="chkreg(reg_check,4)">
<font color="#ff0000">*</font>&nbsp;<font color="#999999">请务必正确填写您的邮箱</font>
<div id="check_email" style="color:#f1b000"></div></td>
</tr>
<tr><!--内表第七行-->
<td height="30" align="right">固定电话：</td>
<td height="30" colspan="2" align="left">&nbsp;<input type="text" name="gtel" size="20" onBlur="chkreg(reg_check,6)">
<font color="#ff0000">*</font>&nbsp;<font color="#999"><div id="check_gtel" style="color:#f1b000"></div></font></td></tr>
<tr><!--列表第八行-->
<td height="30"><div align="right">移动电话：</div></td>
<td height="30" colspan="2" align="left">&nbsp;<input type="text" name="mtel" size="20" onBlur="chkreg(reg_check,5)">
<font color="#ff0000">*</font>&nbsp;
<div id="check_mtel" style="color:#f1b000"></div></td>
</tr>
<tr><!--内表第九行-->
<td height="30">&nbsp;</td>
<td width="100" height="30"><input type="image" src="images/bg_09.jpg"></td>
<td width="340"><img src="images/bg_11.jpg" width="56" height="30" onClick="reg_check.reset()" style="cursor:hand"/></td>
</tr>
</table>
</form></td><!--外表第二行第一个单元完-->
<!--外表第二行第二个单元开始-->
<td width="200" height="364"><img src="image/bg_07.jpg" width="200" height="364"/></td>
</tr>
<tr><!--外表第三行开始-->
<td colspan="2"><img src="images/bg_08.jpg" width="765" height="101"/></td>
</tr>
</table>
</body>
</html>