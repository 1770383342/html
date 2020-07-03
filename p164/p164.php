<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie应用于表单用户名和密码</title>
<script type="text/javascript">
window.onload=function(){
	<?php
	$user=$_COOKIE["UserName"];
	$pass=$_COOKIE["UserPassword"];
	?>
	document.loginform.username.value="<?php echo $user?>";
	document.loginform.userpassword.value=<?php echo $pass?>";
	/*
    var oUser=documnet.getElementById("username");
	var oPass=document.getElementById("userpassword");
	oUser.value="<?php echo $user?>"
	oPass.value="<?php echo $pass?>";
	*/
}
</script>
</head>

<body>
<form method="post" name="loginform" id="loginform" action="">
用户名：<input type="text" name="username" id="username" size="20">
<br><br>
&nbsp;密码：<input type="password" name="userpassword" id="userpassword" size="20">
<br><br>
&nbsp;<input type="submit" name="submit" value="提交">
</form>
<?php
//保存cookie变量
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$userpassword=$_POST["userpassword"];
	setcookie("UserName","$username",time()+(60*60*24*10));//10天有效
	setcookie("UserPassword","$userpassword",time()+(60*60*24*10));//10天有效
}
?>
</body>
</html>