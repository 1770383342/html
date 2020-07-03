<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用session变量在网页间传值</title>
</head>

<body>
<form method="post" action="">
数据1：<input type="text" name="data1" value="daizg" size="20">
数据2：<input type="text" name="data2" value="12软工" size="20">
数据3：<input type="text" name="data3" value="12计算机" size="20">
<input type="submit" name="submit" value="提交">
</form>
<a href="session.php" target="_blank">点击跳转到其他网页</a>
<?php
if(isset($_POST["submit"])){
	$data1=$_POST["data1"]; $data2=$_POST["data2"];
	$data3=$_POST["data3"];
	session_start();
	//setcookie(session_name(),session_id(),time()+600);//此句代码可以让session会话在建立后10分钟后无效。如果没有此代码，会话的有效性在网页关闭时截止。
	echo '<p>';
	echo '在建立session变量前显示$_SESSION数组的值：';
	var_dump($_SESSION); echo '<p>';
	$_SESSION["data1"]=$data1;
	$_SESSION["data2"]=$data2;
	$_SESSION["data3"]=$data3;
	echo '在建立session变量以后显示$_SESSION数组的值：';
	var_dump($_SESSION);
}
?>
</body>
</html>