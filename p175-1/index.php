<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>综合运用数组函数和session变量传递购物车数据</title>
<style type="text/css">
<!--
body{
	margin:0px;
}
.STYLE1{ font-size:13px; color:#f1b000;
font-weight:bold;
}
.STYLE2{ font-size:12px; color:#f1b000;
}
-->
</style>
</head>

<body>
<?php
$name = "智能机器人@数码相机@天翼3G手机@瑞士手表";//定义商品名称字符串
$price = "14998@2588@2666@66698";//定义商品价格字符串
$counts = "1@2@3@4";//定义默认购买字符串
$arrayid = explode("@",$name); //将商品名称字符串当成商品ID号保存到数组中
$arrayinum = explode("@",$price);//将商品价格的字符串转换成数组
$arraycount = explode("@",$counts); //将购买的商品默认数量字符串转换为数组
session_start();//建立会话
$_SESSION["arrayid"]= $arrayid;/*当商品名称ID号数组保存在会话变量中，$SESSION["arrayid"]是一个数组。*/
$_SESSION["arraynum"] = $arrayinum;//商品价格数组保存到会话变量中，$_SESSION["arraynum"]是一个数组。
$_SESSION["arraycount"]=$arraycount;//购买的商品数量数组保存到会变量中，$_SESSION["arraycount"]是一个数组
/*
//测试各会话变量用，看名会话变量是不是数组
var_dump($_SESSION["arrayid"]);echo '<p>';
var_dump($_SESSION["arraynum"]);echo '<p>';
var_dump($_SESSION["arraycount"]);echo '<p>';
*/
?>
<table width="859" height="381" border="0" cellpadding="0" cellspacing="0" background="images/bf.jpg">
<tr>
<td width="225" height="100">&nbsp;</td>
<td width="624">&nbsp;</td>
<td width="10">&nbsp;</td>
</tr>
<tr>
<td height="230" align="left" class="STYLE1"></td>
<td align="center" class="STYLE1">
<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#c17e50">
<tr>
<td width="145" align="center" bgcolor="#fff" class="STYLE1">商品名称</td>
<td width="145" align="center" bgcolor="#fff" class="STYLE1">价格</td>
<td width="145" align="center" bgcolor="#fff" class="STYLE1">数量</td>
<td width="145" align="center" bgcolor="#fff" class="STYLE1">金额</td>
</tr>
<?php
for($i=0;$i<count($arrayid);$i++){ //for循环读取数组中的数据
?>
<form name="form1_<?php echo $i;?>" method="post" action="index1.php">
<tr>
<td height="25" align="center" bgcolor="#fff" class="STYLE2"><?php echo $arrayid[$i]; ?></td>
<td align="center" bgcolor="#fff" class="STYLE2"><?php echo $arrayinum[$i]; ?></td>
<td align="center" bgcolor="#fff" class="STYLE2">
<input name="counts" type="hidden" id="name" value="<?php echo $arraycount[$i];?>" size="8">
<input name="name" type="hidden" id="name" value="<?php echo $arrayid[$i];?>">
<input type="submit" name="Submit" value="更改"></td>
<td align="center" bgcolor="#fff" class="STYLE2"><?php echo $arraycount[$i]*$arrayinum[$i]*$arrayinum[$i]; ?></td>
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
</tr>
</table>
</body>
</html>