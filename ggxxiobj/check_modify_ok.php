<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
include("conn.php");
$title=$_POST["txt_title"];
$content=$_POST["txt_content"];
$id=$_POST["id"];
$sql=$mysqli->query("update tb_affiche set title='$title',content='$content' where id='$id'");
if($sql){
	echo "<script>alert('公告信息编辑成功！');
	window.location.href='search_affiche.php';</script>";
}else{
	echo "<script>alert('公告信息编辑失败！');history.back();</script>";
	//返回到修改提交前的状态
	//echo "<script>alert('公告信息编辑失败！');window.location.href='modify.php?id=$id';</script>";
    }
    ?>
</head>

<body>

    
</body>
</html>