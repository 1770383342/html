<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>公告信息管理</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<script language="javascript">
function check(form){
	if(form.txt_title.value==""){
		alert("公告标题不能为空！");
		form.txt_title.focus();
		return false;
	}
	if(form.txt_content.value==""){
		alert("公告内容不能为空!");
		form.txt_content.focus();
		return false;
	}
	//form.submit();
}
</script>
<?php include("conn.php");
$id=$_GET["id"];
$sql=$mysqli->query("select * from tb_affiche where id=$id");
$row=$sql->fetch_object();
?>
<table width="828" height="522" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td background="images/image_01.gif">&nbsp;</td>
<td height="140" background="images/image_02.gif">&nbsp;</td>
</tr>
<tr>
<td width="202" rowspan="3" valign="top"><?php include("menu.php");?></td>
<td height="34" background="images/image_04.gif">&nbsp;</td>
</tr>
<tr>
<td height="38" background="images/image_06.gif">&nbsp;
</td>
</tr>
<tr>
<td height="270" valign="top">
<table width="626" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="22" align="center" valign="top" class="word_orange"><strong>编辑公告信息</strong></td>
</tr>
<tr>
<td height="235" align="center" valign="top"><table width="500" height="226" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="226" align="center" valign="top">
<form name="form1" method="post" action="check_modify_ok.php">
<table width="520" height="212" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
<tr>
<td width="87" align="center">公告主题：
</td>
<td width="433" height="31"><input name="txt_title" type="text" id="txt_title" size="40" value="<?php echo $row->title;?>">
<input name="id" type="hidden" value="<?php echo $row->id;?>"></td>
</tr>
<tr>
<td height="124" align="center">
公告内容：</td>
<td><textarea name="txt_content" cols="50" rows="8" id="txt_content"><?php echo $row->content;?></textarea></td>
</tr>
<tr><td height="40" colspan="2" align="center"><input name="Submit" type="submit" class="btn_grey" value="修改" onClick="return check(form1);">&nbsp;<input type="reset" name="Submit2" value="重置"></td></tr>
</table>
</form></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td bgcolor="#f0f0f0"></td>
<td height="43" background="images/image_12.gif"></td>
</tr>
</table>
</body>
</html>