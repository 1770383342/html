<?php  
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
$ysk=$_POST["ysk"]."&nbsp;";
$yfh=$_POST["yfh"]."&nbsp;";
$ysh=$_POST["ysh"]."&nbsp;";
$zt="";
if($ysk!="&nbsp;"){
   $zt.=$ysk;
 }
if($yfh!="&nbsp;"){
   $zt.=$yfh;
 }
 if($ysh!="&nbsp;"){
   $zt.=$ysh;
 }
 if(($ysk=="&nbsp;")&&($yfh=="&nbsp;")&&($ysh=="&nbsp;")){
    echo "<script>alert('请选择处理状态!');history.back();</script>";
	exit;
  }
 include("conn/conn.php");
 $sql3=mysqli_query($conn,"select * from tb_dingdan where id='".$_GET["id"]."'");
 $info3=mysqli_fetch_array($sql3);
 if(trim($info3["zt"])=="未作任何处理"){
 $sql=mysqli_query($conn,"select * from tb_dingdan where id='".$_GET["id"]."'");
 $info=mysqli_fetch_array($sql);
 $array=explode("@",$info["spc"]);
 $arraysl=explode("@",$info["slc"]);
 
 for($i=0;$i<count($array);$i++){
	 $id=$array[$i];
     $num=$arraysl[$i];
      mysqli_query($conn,"update tb_shangpin set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'");
    }
  }
 mysqli_query($conn,"update tb_dingdan set zt='".$zt."'where id='".$_GET["id"]."'");
 header("location:lookdd.php");
?>