<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式  
$n0=$_POST["n0"];
$n1=$_POST["n1"];
$p0=md5($_POST["p0"]);
$p1=trim($_POST["p1"]);
include("conn/conn.php");

  $sql=mysqli_query($conn,"select * from tb_admin where name='".$n0."'");
  $info=mysqli_fetch_array($sql);
  if($info==false)
   {
     echo "<script>alert('不存在此用户!');history.back();</script>";
     exit;
   }
   else
   {
    if($info["pwd"]==$p0)
	 {
	  if($n1!="")
	   {
	   
	  mysqli_query($conn,"update tb_admin set name='".$n1."'where id=".$info["id"]." ");
	  }
	  if($p1!="")
	   {
	    $p1=md5($p1);
	     mysqli_query($conn,"update tb_admin set pwd='".$p1."' where id=".$info["id"]."");
	   
	   }
	 }
	 else
	 {
	   echo "<script>alert('原密码输入错误!');history.back();</script>";
       exit;
	 }
   }


echo "<script>alert('更改成功!');history.back();</script>";




?>