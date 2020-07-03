<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
 include("conn/conn.php");
  while(list($name,$value)=each($_POST))
  {
    mysqli_query($conn,"delete from tb_gonggao where id='".$value."'");
  
  }
 header("location:admingonggao.php");  
?>