<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0">
<form method="post" action="#">
<tr>
<td height="25">输入html标签：</td>
<td height="25"><input name="tags" type="text" /></td>
<td><input name="tags" type="submit" value="检测" /></td>
</tr>
</form>
</table>
<?php
if(isset($_POST["submit"])){
	$tags = $_POST['tags'];
	if(trim($tags) !=''){
		$pattern = '/^<[\/]?[a-zA-Z0-9 ="\';":]*>$/';
		if(preg_match($pattern,$tags) == 1){
			$tags = str_replace('<','&lt;',$tags);
			$tags = str_replace('>','&gt;',$tags);
			$tags = str_replace('"','&quot;',$tags);
			//&quot;表示双引号
			echo '输入格式正确：'.$tags;
		}else{
			echo '输入格式错误！！'; }
	}
}
?>
</body>
</html>