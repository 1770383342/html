<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie应用于注册表单和有效日期复选框</title>
<script type="text/javascript">
window.onload=function(){
	<?php
	$user=$_COOKIE["UserName"];
	$pass=$_COOKIE["UserPassword"];
	$vcheck=$_COOKIE["Vcheck"];
	?>
	var oUser=document.getElementById("username");
	var oPass=document.getElementById("userpassword");
	var oCheck=document.getElementById("validtime");
	oUser.value="<?php echo $user ?>";
	oPass.value="<?php echo $pass ?>";
	var sele="<?php echo $vcheck ?>";
	if(sele=="true"){
		oCheck.checked=true;
	}else{
		oCheck.checked=false;
	}
}
</script>
</head>

<body>
<form method="post" name="loginform" id="loginform" action="">
用户名：<input type="text" name="username" id="username" size="20">
<br><br>
&nbsp;密码：<input type="password" name="userpassword" id="userpassword" size="20">
<input type="checkbox" name="validtime" id="validtime" value="validday10">有效期10天
<br><br>
&nbsp;<input type="submit" name="submit" value="提交">
</form>
<?php
//保存cookie变量
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$userpassword=$_POST["userpassword"];
	$time10=time()+60*60*24*10;
	if(isset($_POST["validtime"])){
		//checkbox打上勾，"validtime"变量有效，否则无效
		$vtime=true;
	}else{
		$vtime=false;
	}
	if($vtime){
		setcookie("UserName","$username","$time10");
		setcookie("UserPassword","$userpassword","$time10");
		setcookie("Vcheck","true","$time10");
	}else{
		setcookie("UserName","$username");
		setcookie("UserPassword","$userpassword");
		setcookie("Vcheck","false");
	}
}
?>
</body>
</html>