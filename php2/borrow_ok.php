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
$no=$_SESSION['no'];
//var_dump($id);
//var_dump($no);
$borrow_time=date("Y-m-d");
$y=date('Y');
$m=date('m')+3;
$d=date('d');
if($m>12){
	$m=$m-12;
	$y=$y+1;
	}
$return_time=$y.'年'.$m.'月'.date('d').'日';
//var_dump($borrow_time);
//var_dump($return_time);
$sql=$mysqli->query("select book_count from tb_book_php where book_id='".$id."'");
$row=$sql->fetch_object();
$count=$row->book_count;
//var_dump($count);
if($count==0){
echo "<script>
	 alert('书已经借完！！');
	 window.location.href='reader.php'</script>";
	 }
	 else{
		 $sql=$mysqli->query("select * from tb_borrow_php where reader_id='".$no."' and book_id='".$id."'");
		 $row=$sql->fetch_object();
		// var_dump($row);
		 if($row){echo "<script>
	 alert('你已经借了这本书！！');
	 window.location.href='reader.php'</script>";
	 }else{
$result=$mysqli->query("insert into tb_borrow_php(reader_id,book_id,borrow_time,return_time) values ('$no','$id','$borrow_time','$return_time')");
if($result){
	$count=$count-1;
	//var_dump($count);
	$sql=$mysqli->query("update tb_book_php set book_count='".$count."' where book_id='".$id."'");
	 echo "<script>
	 alert('借书成功！！');
	 window.location.href='reader.php'</script>";
	 }else{
		 echo "<script>
	 alert('借书失败！！');
	 window.location.href='reader.php?id=<?php echo $id; ?>'</script>";
		 }
	 }
	 }
$mysqli->close();
?>     
</body>
</html>