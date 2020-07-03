<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
include("conn.php");
$id=$_GET["id"];
$sql=mysqli_query($link,"delete from tb_affiche where id=$id");
if($sql){
	echo "<script>alert('公告信息删除成功！');
	window.location.href='delete_affiche.php';</script>";
}else{
	echo "<script>alert('公告信息删除失败！');
	history.back();</script>";
}
?>
</body>
</html>