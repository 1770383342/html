<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
  $page=intval($_POST["page_id"]);
  include("conn/conn.php");
  while(list($value,$name)=each($_POST))
   {  
     mysqli_query($conn,"delete from tb_dingdan where id='".$value."'");
   }
 header("location:lookdd.php?page=".$page."");
?>