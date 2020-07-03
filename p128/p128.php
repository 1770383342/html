<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取复选框的值</title>
<style type="text/css">
body,td,th{
	font-size:12px;
}
body{
	margin:5px 0px 0px 5px;
}
</style>
</head>

<body>
<form name="form1" method="post" action="">
<table width="506" cellpadding="0" cellspacing="0">
<tr>
<td width="462" height="25" align="center" valign="top">
您喜欢的图书类型：
<input type="checkbox" name="mrbook[]" value="入门类">
入门类
<input type="checkbox" name="mrbook[]" value="案例类">
案例类
<input type="checkbox" name="mrbook[]" value="讲解类">
讲解类
<input type="checkbox" name="mrbook[]" value="典型实践类">
实践类
</td>
<td width="42" align="center" valign="top"><input type="submit" name="submit" value="提交"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["mrbook"])){
	echo "您的选择的结果是：";
	for($i=0;$i<count($_POST["mrbook"]);$i++)
	echo $_POST["mrbook"][$i]."&nbsp;&nbsp;";
	//循环输出用户选择的图书类别
}
?>
</body>
</html>