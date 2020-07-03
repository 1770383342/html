<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用foreach语句遍历数组</title>
</head>

<body>
<table width="859" height="381" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="225" height="100">&nbsp;</td>
<td width="624">&nbsp;</td>
<td width="10">&nbsp;</td>
</tr>
<tr>
<td height="230" align="left"></td>
<td align="center"><?php
$name = array("1" => "智能机器人","2" => "数码相机","3"=>"天翼3G手机","4"=>"瑞士手表");
$price = array("1"=>"14998元","2"=>"2588元","3"=>"2666元","4"=>"66698元");
$counts = array("1"=>1,"2"=>1,"3"=>2,"4"=>1);
echo'<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#c17e50">
<tr>
<td width="145" align="center" bgcolor="#fff">商品名称</td>
<td width="145" align="center" bgcolor="#fff">价格</td>
<td width="145" align="center" bgcolor="#fff">数量</td>
<td width="145" align="center" bgcolor="#fff">金额</td>
</tr>';
foreach($name as $key=>$value){
	//以book数组做循环，输出键和值
	echo'<tr>
	<td height="25" align="center" bgcolor="#fff">'.$value.'</td>
	<td align="center" bgcolor="#fff">'.$price[$key].'</td>
	<td align="center" bgcolor="#fff">'.$counts[$key].'</td>
	<td align="center" bgcolor="#fff">'.$counts[$key]*$price[$key].'</td>
	</tr>';
}
echo'</table>';
?></td>
<td align="left"></td>
</tr>
<tr>
<td align="left"></td>
<td align="left"></td>
<td align="left"></td>
</tr>
</table>
</body>
</html>