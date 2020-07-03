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
	if(form.txt_keyword.value==""){
		alert("请输入查询关键字！");
		form.txt_keyword.focus();
		return false;
	}
	//form.submit();
}
</script>
<table width="828" height="522" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
<tr>
<td background="images/image_01.gif">&nbsp;</td>
<td height="140" background="images/image_02.gif">&nbsp;</td>
</tr>
<tr>
<td width="202" rowspan="3" valign="top" bgcolor="#f0f0f0"><table width="202" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><?php include("menu.php");?>
</td>
</tr>
</table>
</td>
<td height="34" background="images/image_04.gif">&nbsp;</td>
</tr>
<tr>
<td height="38" background="images/image_06.gif">&nbsp;</td>
</tr>
<tr>
<td height="270" valign="top"><table width="626" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="257" align="center" valign="top" background="images/image_08.gif"><table width="600" height="271" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="22" align="center" valign="top" class="word_orange"><strong>编辑公告信息</strong></td>
</tr>
<tr>
<td height="249" align="center" valign="top"><table width="400" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="30" align="center"><form name="form1" method="post" action="">
查询关键字&nbsp;
<input name="txt_keyword" type="text" id="txt_keyword" size="40">&nbsp;
<input type="submit" name="Submit" value="搜索" onClick="return check(from1)">
</form></td>
</tr>
</table>
<table width="550" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#999">
<tr align="center" bgcolor="#f0f0f0">
<td width="214">公告标题</td>
<td width="271">公共内容</td>
<td width="47">编辑</td>
</tr>
<?php
include("conn.php");
$sql=$pdo->query("select * from tb_affiche order by createtime desc");
$row=$sql->fetch(PDO::FETCH_OBJ);
if(isset($_POST["Submit"])){
	$keyword=$_POST["txt_keyword"];
	$sql=$pdo->query("select * from tb_affiche where title like '%$keyword%' or content like '%keyword%'");
	$row=$sql->fetch(PDO::FETCH_OBJ);
}
if(!$row){
	echo "<font color='red'>暂无公告信息！</font>";
}else{
	do{
		?>
<tr bgcolor="#fff">
<td><?php echo $row->title;?></td>
<td><?php echo $row->content;?></td>
<td align="center"><a href="modify.php?id=<?php echo $row->id;?>"><img src="images/update.gif" width="20" height="18" border="0"></a></td>
</tr>
<?php
}while($row=$sql->fetch(PDO::FETCH_OBJ));
}
$sql=$pdo=NULL;
?>
</table></td>
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