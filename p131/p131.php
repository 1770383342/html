<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取文件域的值</title>
<style type="text/css">
body,td,th{
	font-size:12px;
}
body{
	margin-left:5px;
	margin-top:5px;
}
</style>
</head>

<body>
<form name="form1" method="post" action="">
<input type="file" name="file" size="15">
<input type="submit" name="upload" value="上传">
</form>
<?php
if(isset($_POST["upload"])){
	echo $_POST["file"];
	echo '<p>';
	var_dump($_POST);}//输出要上传文件的绝对路径
	?>
</body>
</html>