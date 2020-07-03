<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>综合运用数组函数，更新数组中的元素值</title>
<style type="text/css">
body{
	margin:0px;
}
.STYLE1{
	font-weight:bold;
	font-size:13px;
	color:#f1b00;
}
.STYLE2{
	font-size:12px;
	color:#flb000;
}
	</style>
</head>

<body>
<?php
$name = "智能机器人@数码相机@天翼3G手机@瑞士手表";
//定义字符串
$price = "14998@2588@2666@66698";
$counts = "1@2@3@4";
$arrayid = explode("@",$name);
//将商品ID的字符串转换到数组中
$arraynum = explode("@",$price);
//将商品价格的字符串转换到数组中
$arraycount = explode("@",$counts);
//将商品数量的字符串转换到数组中
if(isset($_POST["Submit"])){
	$id=$_POST["name"];  //获取要更改的元素名称
	$num = $_POST["counts"];  //获取更改的值
	$key = array_search($id,$arrayid); //在数组中搜索给定的值，如果成功返回键名
	$arraycount[$key]=$num;  //更改商品数量
	$counts=implode("@",$arraycount);  //将更改后的商品数量添加到购物车中
}
?>
<table width="859" height="381" border="0" cellpadding="0" cellspacing="0">
<tr><!-- 外表的第一行-->
<td width = "225" height="100">&nbsp;</td>
<td width="624">&nbsp;</td>
<td width="10">&nbsp;</td>
</tr>
<tr><!--外表的第二行-->
<td height="230" align="left" class="STYLE1"></td>
<td align="center" class="STYLE1">
<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#c17e50">
<tr><!-- 内标的第一行，显示了表头 -->
<td width="145" align="center" bgcolor="#ffffff" class="STYLE1">商品名称</td>
<td width="145" align="center" bgcolor="#ffffff" class="STYLE1">价格</td>
<td width="145" align="center" bgcolor="#ffffff" class="STYLE1">数量</td>
<td width="145" align="center" bgcolor="#ffffff" class="STYLE1">金额</td>
</tr>
<?php
for($i=0;$i<count($arrayid);$i++){  //循环读取数组中的数据，以下这段代码充分说明了html脚本和php脚本分析解释。。。
?>
<form name="form1_<?php echo $i;?>" method="post" action="">
<tr><!--在内标中从第2行开始，循环显示智能机器人、数码相机、天翼3G手机、瑞士手表等行的表格数据-->
<td height="25" align="center" bgcolor="#fff" class="STYLE2"><?php echo $arrayid[$i]; ?></td>
<td align="center" bgcolor="#fff" class="STYLE2"><?php echo $arraynum[$i]; ?></td>
<td align="center" bgcolor="#fff" class="STYLE2">
<input name="counts" type="text" id="counts" value="<?php echo $arraycount[$i]; ?>" size="8">
<input name="name" type="hidden" id="name" value="<?php echo $arrayid[$i]; ?>">
<input type="submit" name="Submit" value="更改"></td>
<td align="center" bgcolor="#fff" class="STYLE2"><?php echo $arraycount[$i]*$arraynum[$i]; ?> </td>
</tr>
</form>
<?php
}
?>
</table>
</td>
<td align="left" class="STYLE1"></td>
</tr>
<tr>
<td align="left" class="STYLE1"></td>
<td align="left" class="STYLE1"></td>
<td align="left" class="STYLE1"></td>
</tr>
</table>

</body>
</html>