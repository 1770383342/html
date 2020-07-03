<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改管理员密码</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body  bgcolor="#68baeb">
<div align="center">
<table width="700" height="600" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" >
<tr>
<td height="130" width="700" align="center" class="word_green"><img src="images/4.gif" width="700" height="130" /></td>
</tr>
<tr height="470" width="700" valign="top">
<td  background="images/bg1.gif">
<table width="700" height="20" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" align="left">

<tr align="left" width="300">
<td width="65" bgcolor="#FFFF99" class="word_orange"><a href="manager_book.php"><strong>书籍</strong></a></td>
<td width="76" bgcolor="#FFFF99" class="word_orange"><a href="manager_reader.php"><strong>用户</strong></a></td>
<td width="115" bgcolor="#FFFF99" class="word_orange"><a href="manager_information.php"><strong>个人信息</strong></a></td>
<td width="84" bgcolor="#FFFF99" class="word_orange"><a href="login.php"><strong>退出</strong></a></td>
</tr>
</table>
<br><br><br><br><br><br><br><br>
<table width="510" height="" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" align="center">
 <form name="form1" method="post" action=""  onsubmit="return chkinput(this)">
<tr>
        <td width="122" height="25" bgcolor="#FFFFFF"><div align="center">输入密码：</div></td>
        <td width="295" height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="password1" class="inputcss" size="25"></td>
      </tr>    
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">再次输入密码：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="password2" class="inputcss" size="25"></td>
      </tr>
       <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="确认修改" class="buttoncss" onclick="return check(form1)">&nbsp;&nbsp;</div></td>
      </tr>
	 </form>  
<?php
include("conn.php");
$no=$_SESSION['no'];
$pwd=$_SESSION['pwd'];
//var_dump($no);
//$id=$_GET["id"];
//var_dump($pwd);
if(isset($_POST["submit"])){
$password1=$_POST["password1"];
$password2=$_POST["password2"];
if($password1==$password2){
	//var_dump($password1);
	if($password1==$pwd){echo "<script>
	 alert('和原密码相同！！');
	 window.location.href='manager_pwd_ok.php'</script>";
	 }else{
	$result=$mysqli->query("update tb_manager_php set manager_pwd='".$password1."' where manager_id='".$no."' ");
	//var_dump($result);
 if($result){
	 echo "<script>
	 alert('修改成功！！');
	 window.location.href='manager_information.php'</script>";
	 }else{
		 echo "<script>
	 alert('修改失败！！');
	 window.location.href='manager_pwd_ok.php'</script>";
		 }
	 }
}
	else{
		 echo "<script>
	 alert('两次密码不一致！！');
	 window.location.href='manager_pwd_ok.php'</script>";
		 
}
}
$mysqli->close();
?>     
</table>

</table>
<tr><div id="footer">重庆师范大学17级计算机科学与技术2班谭自立（17623575750）版权所有</div></tr>
</div>
</body>
</html>