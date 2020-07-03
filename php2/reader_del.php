<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除读者</title>
</head>

<body>
<?php
include("conn.php");
$id=$_GET["id"];
//$no=$_SESSION["no"];
//var_dump($id);
$sql=$mysqli->query("select * from tb_borrow_php where reader_id='".$id."' ");
$row=$sql->fetch_object();
if(!$row){
$query=$mysqli->query("delete from tb_reader_php where reader_id='".$id."' ");
//var_dump($query);
//$row=$query->fetch_object();
if($query){
		echo "<script>
	 alert('删除读者成功！！');
	 window.location.href='manager_reader.php'</script>";
	}
	else{
		echo "<script>
	 alert('删除读者失败！！');
	 window.location.href='manager_reader.php'</script>";
		}
}else{
	echo "<script>
	 alert('这位读者还有书没还，不能删除！！');
	 window.location.href='manager_reader.php'</script>";
	}
$mysqli->close();
?>     
</body>
</html>