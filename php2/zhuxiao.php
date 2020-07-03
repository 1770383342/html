<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注销</title>
</head>

<body>
<?php
include("conn.php");
$id=$_SESSION['no'];
$result=$mysqli->query("select * from tb_borrow_php where reader_id='".$id."' ");
$row=$result->fetch_object();
if(!$row){
$sql=$mysqli->query("delete from tb_reader_php where reader_id='".$id."'");
if($sql){
	echo"<script>alert('用户注销成功！！');
	window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('用户注销失败！！');
	window.location.href='reader.php';</script>";
		}
}else{
	echo"<script>alert('你还有书没还，不能注销账号！！');
	window.location.href='reader.php';</script>";
	}
?>
</body>
</html>