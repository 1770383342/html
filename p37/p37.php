<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>判断字符串</title>
</head>

<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<form method="post" action="#">
<tr>
<td height="25">请输入25位数字：</td>
<td><input type="text" name="mytext" maxlength="25" size="28"></td>
<td><input type="submit" value="检测"></td>
</tr>
<tr>
<td colspan="3" height="25" align="center" valign="middle">
<?php
if(isset($_POST['mytext'])){
	$number = $_POST['mytext'];
	if(is_numeric($number) and strlen($number) <=25)
	echo'输入正确，输入的数字列是：'.$number;
	else
	echo'输入错误';
}
?>
</td>
</tr>
</form>
</table>
</body>
</html>