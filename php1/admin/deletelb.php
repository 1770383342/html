<?php
header ( "Content-type: text/html; charset=utf-8" ); //�����ļ������ʽ
include("conn/conn.php");
while(list($name,$value)=each($_POST)){
 mysqli_query($conn,"delete from tb_type where id='".$value."'");
 mysqli_query($conn,"delete from tb_shangpin where id='".$value."'");
 }
 header("location:showleibie.php");
?>