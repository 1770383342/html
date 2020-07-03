<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#68baeb">
<script language="javascript">
  function chkinput(form){
  
    if(form.no.value==""){
	  alert("请输入帐号!");
	  form.no.select();
	  return(false);
	}
   if(form.pwd.value==""){
	  alert("请输入登录密码!");
	  form.pwd.select();
	  return(false);
	}
  }
     </script>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
</table>
<br><br><br><br><br>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#1170FF"><table width="500" height="157" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form2" method="post" action=""  onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#B5D3FF">
          <div align="center">
            <input name="user" type="radio" value="1"  size="6" checked="checked" />
            管理员
            <input name="user" type="radio" value="2"  size="6" checked="checked" />
            用户</div>
        </td>
      </tr>
      <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">用户帐号：</div></td>
        <td width="347" bgcolor="#FFFFFF">&nbsp;<input type="text" name="no" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">用户密码：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="登录" class="buttoncss" onclick="return check(form2)">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
      <tr>
     <td height="25"  colspan="2" bgcolor="#FFFFFF"><a href="index.php">读者注册</a>&nbsp;&nbsp;<a href="forget_pwd.php">忘记密码</a></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<?php
 include("conn.php");
  if(isset($_POST["submit"])){
	 $user=$_POST["user"];
 }
 
 if(@$user==1){
  
       $no=$_POST["no"];
       $pwd=$_POST["pwd"];
 $sql=$mysqli->query("select * from tb_manager_php where manager_id='".$no."' ");
 $info=$sql->fetch_object();
 if($info){
	 $password1=$info->manager_pwd;
	 if($pwd==$password1){
	 echo "<script>
	 alert('登录成功！！'); 
	 window.location.href='manager_book.php'</script>";
	 $_SESSION['no']=$info->manager_id;
	 $_SESSION['pwd']=$info->manager_pwd;
	 }else{
		 echo "<script>
	 alert('密码有误，请重新输入！！');
	 window.location.href='login.php'</script>";
	 }
	 }else{echo "<script>
	 alert('账号不存在！！'); 
	 </script>";}
	 }
	
	else if(@$user==2){ 
       $tel=$_POST["no"];
       $pwd=$_POST["pwd"];
 //$sql=$mysqli->query("select * from tb_reader_php where 
// reader_tel='".$tel."' and reader_pwd='".$pwd."' ");
$sql=$mysqli->query("select * from tb_reader_php where reader_id='".$tel."' ");
 $info=$sql->fetch_object();
 if($info){
	 $password=$info->reader_pwd;
	 if($pwd==$password){
	 echo "<script>
	 alert('登录成功！！'); 
	 window.location.href='reader.php'</script>";
	 $_SESSION['no']=$info->reader_id;
	 $_SESSION['pwd']=$info->reader_pwd;
	 }else{
		 echo "<script>
	 alert('密码有误，请重新输入！！');
	 window.location.href='login.php'</script>";
	 }
	 }else{echo "<script>
	 alert('账号不存在，请先注册！！'); 
	 window.location.href='index.php'</script>";}
   }
  $mysqli->close();
?>
</body>
</html>
