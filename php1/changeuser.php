<?php
include("conn/conn.php");
$email=$_POST["email"];
$truename=$_POST["truename"];
$sfzh=$_POST["sfzh"];
$tel=$_POST["tel"];
$qq=$_POST["qq"];
$dizhi=$_POST["dizhi"];
$youbian=$_POST["youbian"];
mysqli_query($conn,"update tb_user set email='$email',truename='$truename',sfzh='$sfzh',tel='$tel',qq='$qq',dizhi='$dizhi',youbian='$youbian'");
header("location:usercenter.php");

?>