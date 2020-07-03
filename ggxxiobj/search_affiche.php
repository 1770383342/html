<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>公告信息管理</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<script language="javascript">
function check(form){ //form是形参
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
<td width="202" rowspan="3" valign="top" bgcolor="#f0f0f0">
<table width="202" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><?php include("menu.php");?></td>
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
<td height="22" align="center" valign="top" class="word_orange"><strong>查询公告信息</strong></td>
</tr>
<tr>
<td height="249" align="center" valign="top"><table width="400" border="0" cellpadding="0" cellspacing="0">
<tr><td height="30" align="center"><form name="form1" method="post" action="">
查询关键字&nbsp;
<input name="txt_keyword" type="text" id="txt_keyword" size="40">&nbsp;
<input type="submit" name="Submit" value="搜索" onClick="return check(form1)">
</form></td>
</tr>
</table>
<table width="550" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#999">
<tr align="center" bgcolor="#f0f0f0">
<td width="221">公告标题</td>
<td width="329">公告内容</td>
</tr>
<?php
include("conn.php");
//$sql=mysqli_query($link,"select * from tb_affiche order by createtime desc");
$sql=$mysqli->query("select * from tb_affiche order by createtime desc");
//$row=mysqli_fetch_object($sql);
$row=$sql->fetch_object();
//$sql中包括了全部的公告内容
if(isset($_POST["Submit"])){
	$keyword=$_POST["txt_keyword"];
	$sql=$mysqli->query("select * from tb_affiche where title like '%".trim($keyword)."%' or content like '%".trim($keyword)."%' order by createtime desc");
	//$sql中只包括了符合条件的公告内容
	$row=$sql->fetch_object();
}
if(!$row){
	echo"<font color='red'>您搜索的信息不存在，请使用类似的关键字进行检索！</font>";
}else{
	do{
		?>
        <tr bgcolor="#fff">
        <td><?php echo $row->title;?></td>
        <td><?php echo $row->content;?></td>
        </tr>
        <?php
	}while($row=$sql->fetch_object());
}
$sql->close();
$mysqli->close();
?>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr><tr>
<td bgcolor="#f0f0f0"></td>
<td height="43" background="images/image_12.gif"></td>
</tr>
</table>
</body>
</html>