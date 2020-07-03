<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>借书</title>
</head>

<body>
<?php
include("conn.php");
$id=$_GET["id"];
$no=$_SESSION["no"];
//var_dump($id);
//var_dump($no);
$result=$mysqli->query("select book_count from tb_book_php where book_id='".$id."' ");
$row=$result->fetch_object();
$count=$row->book_count;
//var_dump($count);
$query=$mysqli->query("delete from tb_borrow_php where book_id='".$id."' and reader_id='".$no."'");
//var_dump($query);
//$row=$query->fetch_object();
if($query){
	$count=$count+1;
	$result=$mysqli->query("update tb_book_php set book_count='".$count."' where book_id='".$id."'");
	echo "<script>
	 alert('还书成功！！');
	 window.location.href='return.php'</script>";
	}
	else{
		echo "<script>
	 alert('还书失败！！');
	 window.location.href='return.php'</script>";
		}
$mysqli->close();
?>     
</body>
</html>