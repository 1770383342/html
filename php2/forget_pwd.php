<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>忘记密码</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
  if(form.no.value==""){
	  alert("请输入手机号!");
	  form.no.select();
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
        <td height="25" colspan="2" bgcolor="#B5D3FF"><div align="center">找回密码</div></td>
      </tr>
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
        <td height="25" bgcolor="#FFFFFF"><div align="center">帐号：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="id" class="inputcss" size="25"></td>
      </tr>   
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">姓名：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="name" class="inputcss" size="25"></td>
      </tr> 
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="确定" class="buttoncss" onclick="return check(form1)">
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
	 $user=$_POST["user"];
 }
 
 if(@$user==1){
  $id=$_POST["id"];
       $name=$_POST["name"];
$result=$mysqli->query("select * from tb_manager_php where manager_id='".$id."' and manager_name='".$name."' ");
$row=$result->fetch_object();
 if($row){
	 $pwd=$row->manager_pwd;
	 echo "<script>
	 alert('你的密码是'+$pwd);
	 window.location.href='login.php'</script>";
	 }else{
		 echo "<script>
	 alert('账号或名字错误，请重新输入！！');
	 window.location.href='forget_pwd.php'</script>";
		 }
}
	
	else if(@$user==2){ 
       $id=$_POST["id"];
       $name=$_POST["name"];
	   $sql=$mysqli->query("select * from tb_reader_php where reader_id='".$id."'");
	   $info=$sql->fetch_object();
	   if(!$info){
		   echo "<script>
	 alert('账号不存在，请先注册');
	 window.location.href='index.php'</script>";
		   }else{
$result=$mysqli->query("select * from tb_reader_php where reader_id='".$id."' and reader_name='".$name."' ");
$row=$result->fetch_object();
 if($row){
	 $pwd=$row->reader_pwd;
	 echo "<script>
	 alert('你的密码是'+$pwd);
	 window.location.href='login.php'</script>";
	 }else{
		 echo "<script>
	 alert('名字错误，重新输入！！');
	 window.location.href='forget_pwd.php'</script>";
		 }
}
	}
  $mysqli->close();
?>
</body>
</html>
