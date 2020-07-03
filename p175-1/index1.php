<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用session变量传递购物车数据</title>
<style type="text/css">
<!--
body{
	margin:0px;
}
.STYLE1{font-size:13px; color:#f1b000; font-weight:bold;}
.STYLE2{font-size:12px; color:#f1b000;}
-->
</style>
</head>

<body>
<?php
session_start();
if(isset($_POST["Submit"])){
	$id=$POST["name"]; //获取商品名称
	$num=$POST["counts"];//获取商品价格
	$arraynum=$_SESSION["arraynum"];//把会话中的商品价格取出来放在数组$arraynum中
	$arrayid=$_SESSION["arrayid"];//把会话中的商品名称取出来放在数组$arrayid中
	$key=array_search($id,$arrayid);//在商品名称数组中搜索给定的值，并返回此商品名称对应的键名修改商品的购买数量
	$arraycount=$_SESSION["arraycount"];//把购买的商品数量会话变量里的内容赋值给商品购买数组$arraycount
}
?>
<table width="859" height="381" border="0" cellpadding="0" cellspacing="0" bgcolor="images/bf.jpg">
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
<form name="form1_<?php echo $i;?>" method="post" action="">
<tr>
<td height="25" align="center" bgcolor="#fff" class="STYLE2"><?php echo $arrayid[$i];?></td>
<td align="center" bgcolor="#fff" class="STYLE2"><?php echo $arraynum[$i]; ?></td>
<td align="center" bgcolor="#fff" class="STYLE2">
<input name="counts" type="text" id="counts" value="<?php echo $arraycount[$i]; ?>" size="8">
<input name="name" type="hidden" id="name" value="<?php echo $arrayid[$i]; ?>">
<input type="submit" name="Submit" value="更改"></td>
<td align="center" bgcolor="#fff" class="STYLE2"><?php echo $arraycount[$i]*$arraynum[$i]; ?></td>
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