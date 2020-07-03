<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie和注册表单中的单选项</title>
<script type="text/javascript">
window.onload=function(){
	<?php
	$user=$_COOKIE["UserName"];
	$pass=$_COOKIE["UserPassword"];
	$vcheck=$_COOKIE["Vcheck"];
	?>
	var oUser=document.getElementById("username");
	var oPass=document.getElementById("userpassword");
	oUser.value="<?php echo $user ?>";
	oPass.value="<?php echo $pass ?>";
	var aRadio=document.getElementsByName("validtime");
	var sele="<?php echo $vcheck ?>";
	switch(sele){
		case "day0":
		aRadio[0].checked=true; break;
		case "dat30":
		aRadio[1].checked=true; break;
		case "day365";
		aRadio[2].checked=true; break;
	}
}
</script>
</head>

<body>
<form method="post" name="loginform" id="loginform" action="">
<label for="username">用户名：</label><input tabindex="text" name="username" id="username" size="20">
<br><br>
&nbsp;&nbsp;<label for="userpassword">密码：</label><input type="password" name="userpassword" id="userpassword" size="20">
<br><br>
<label><input type="radio" name="validtime" value="day0" checked>不保存注册信息</label>
<label><input type="radio" name="validtime" value="day30">保存注册信息30天</label>
<label><input type="radio" name="validtime" value="day365">保存注册信息一年</label>
<br><br>
&nbsp;<input type="submit" name="submit" value="提交">
</form>
<?php
//保存cookie变量
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$userpassword=$_POST["userpassword"];
	$time30=time()+60*60*24*30;
	$time365=time()+60*60*24*365;
	$vtime=$_POST["validtime"];
	switch($vtime){
		case "day0":
		setcookie("UserName","$username");
		setcookie("UserPassword","$userpassword");
		setcookie("Vcheck","day0");
		break;
		case "day30":
		setcookie("UserName","$username","$time30");
		setcookie("UserPassword","$userpassword","$time30");
		setcookie("Vcheck","day30","$time30");
		break;
		case "day365":
		setcookie("UserName","$username","$time365");
		setcookie("UserPassword","$userpassword","$time365");
		setcookie("Vcheck","day365","$time365");
		break;
	}
	echo "<script>document.location.href='p166.php';</script>";
}
?>
</body>
</html>