<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
  if(form.no.value==""){
	  alert("请输入手机号!");
	  form.no.select();
	  return(false);
	}
   if(form.pwd.value==""){
	  alert("请输入密码!");
	  form.pwd.select();
	  return(false);
	}
	 if(form.sname.value==""){
	  alert("请输入姓名!");
	  form.sname.select();
	  return(false);
	}
}
</script>
<body bgcolor="#68baeb">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
</table>
<br><br><br><br><br>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#1170FF"><table width="500" height="157" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action=""  onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#B5D3FF"><div align="center">用户注册</div></td>
      </tr>
             <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">手机号：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="id" class="inputcss" size="25"></td>
      </tr>
         <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">密码：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>     
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">姓名：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="name" class="inputcss" size="25"></td>
      </tr> 
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="注册" class="buttoncss" onclick="return check(form1)">
        <input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
       <tr>
     <td height="25"  colspan="2" bgcolor="#FFFFFF"><a href="login.php">登录</a></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<?php
include("conn.php");
if(isset($_POST["submit"])){
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$name=$_POST["name"];
$result=$mysqli->query("insert into tb_reader_php(reader_id,reader_name,reader_pwd,manager_id) values ('$id','$name','$pwd','001')");
 if($result){
	 echo "<script>
	 alert('注册成功！！');
	 window.location.href='login.php'</script>";
	 }else{
		 echo "<script>
	 alert('手机号已注册，可直接登录！！');
	 window.location.href='login.php'</script>";
		 }
}

$mysqli->close();
?>
</body>
</html>
