<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用explode()函数添加多选题</title>
<style type="text/css">
<!--
.style1{color:#ff0000;}
-->
</style>
</head>

<body>
<table width="400" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="1" cellpadding="0" cellspacing="1" bordercolor="#ff9900" bgcolor="#ccff66">
<tr align="center">
<td height="36">多选题目：</td>
<td height="36" align="left"><p>
<input name="title" type="text" id="title" size="32">
</p></td>
<td height="36">&nbsp;</td>
</tr>
<tr align="center">
<td width="98" height="120">添加多选题：</td>
<td width="223" height="120"><p>
<textarea name="content" cols="30" rows="5" id="content"></textarea>
<br>
<span class="style1">注意：每个选项间用*分割符</span></p></td>
<td width="61" height="120"><input type="submit" name="Submit" value="提交"></td>
</tr>
</table>
</form>
</td></tr>
<tr>
<td>
<?php
if(isset($_POST["Submit"])){
	?>
    <table width="400" border="1" cellpadding="0" cellspacing="1" bordercolor="#ff9900" bgcolor="#ccff66">
    <tr align="center">
    <td width="98" height="30"><?php echo $_POST["title"];?></td>
    <td width="223" height="30">
    <?php
	$content=$_POST["content"];
	$data=explode("*",$content);
	while(list($name,$value)=each($data)){
		echo '<input type="checkbox" name="checkbox" value="checkbox">';
		echo $value."\n";
	}
	?>
    </td>
    <td width="61" height="30">&nbsp;</td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <?php
}
?>
<p>&nbsp;</p>
</body>
</html>