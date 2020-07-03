<?php
           $conn=mysqli_connect("localhost","a0924204303","77477291","a0924204303",3306) or die("数据库服务器连接错误".mysqli_error());
           //mysqli_select_db("db_shop",$conn) or die("数据库访问错误".mysql_error());
           mysqli_query($conn,"set character set utf-8");
		   mysqli_query($conn,"set names utf-8");
?>
