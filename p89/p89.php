<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>检测信箱的正确性</title>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0">
<form method="post" action="#">
<tr>
<td height="25">输入Email:</td>
<td height="25"><input name="email" type="text" /></td>
<td><input type="submit" name="submit" value="检测" /></td>
</tr>
</form>
</table>
<?php
if(isset($_POST["submit"])){
	$emial = $_POST['email'];
	if(trim($email) !=''){
		$pattern = '/^[a-zA-Z][a-zA-Z0-9]+[.]){1,3}[a-zA-Z]*/';
		if(preg_match($pattern,$email) == 1){
			echo '输入格式正确：'.$email;
		}else{
			echo '输入格式错误！！';
		}
	}
}?>
</body>
</html>