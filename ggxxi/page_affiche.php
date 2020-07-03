<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>公告信息管理</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<table width="828" height="522" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
<tr>
<td background="images/image_01.gif">&nbsp;</td>
<td height="140" background="images/image_02.gif">&nbsp;</td>
</tr>
<tr>
<td width="202" rowspan="3" valign="top"><table width="202" border="0" cellpadding="0" cellspacing="0">
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
<td height="22" align="center" valign="top" class="word_orange"><strong>公告信息分页显示</strong></td>
</tr>
<tr>
<td height="249" align="center" valign="top"><table width="550" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#999">
<tr align="center" bgcolor="#f0f0f0">
<td width="221">公告标题</td>
<td width="329">公告内容</td>
</tr>
<?php
include("conn.php");
/* $page为当前页，如果$page为空，则初始化为1 */
if(isset($_GET["page"])){
	$page=$_GET["page"];
	if($page=="")$page=1;
	if(is_numeric($page)){
		$page_size=4;  //每页显示4条记录
		$query="select count(*) as total from tb_affiche";
		$result=mysqli_query($link,$query);
		//查询符合条件的记录总条数
		//$message_count=mysql_result($result,0,"total");//此语句不能用
		$arr=mysqli_fetch_assoc($result);
		$message_count=$arr["total"];
		$page_count=ceil($message_count/$page_size);
		//根据记录总数除以每页显示的记录数求出所分的页数
		$offset=($page-1)*$page_size;
		//计算某一页从第几条数据开始显示
		$sql=mysqli_query($link,"select * from tb_affiche order by createtime desc limit $offset, $page_size");
		$row=mysqli_fetch_object($sql);
		//取出第一条记录
	}
	if(!$row){
		echo"<font color='red'>暂无公告信息！</font>";
	}else{
		do{
			?>
            <tr bgcolor="#fff">
            <td><?php echo $row->title;?></td>
            <td><?php echo $row->content;?></td>
            </tr>
            <?php
		}while($row=mysqli_fetch_object($sql));
	}
}
?>
</table>
<br>
<table width="550" border="0" cellpadding="0" cellspacing="0">
<tr>
<!--翻页条-->
<td width="37%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页&nbsp;记录：<?php echo $message_count;?>条&nbsp;</td>
<td width="63%" align="right"><?php
if($page!=1){
	echo "<a href=page_affiche.php?page=1>首页</a>&nbsp;";
	echo "<a href=page_affiche.php?page=".($page-1).">上一页</a>&nbsp;";
}
if($page<$page_count){
	echo "<a href=page_affiche.php?page=".($page+1).">下一页</a>&nbsp;";
	echo "<a href=page_affiche.php?page=".$page_count.">尾页</a>";
}
mysqli_free_result($sql);
mysqli_close($link);
?>
</td></tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td bgcolor="#f0f0f0"></td>
<td height="43" background="images/image_12.gif"></td>
</tr></table>
</body>
</html>