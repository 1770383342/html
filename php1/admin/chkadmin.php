<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
 class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y)
    {
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput()
   {
     include("conn/conn.php");
     $sql=mysqli_query($conn,"select * from tb_admin where name='".$this->name."'");
     $info=mysqli_fetch_array($sql);
     if($info==false)
       {
          echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
          exit;
       }
      else
       {
          if($info["pwd"]==$this->pwd){
               header("location:default.php");
            }
          else
           {
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }

      }    
   }
 }


    $obj=new chkinput(trim($_POST["name"]),md5(trim($_POST["pwd"])));
    $obj->checkinput();

?>