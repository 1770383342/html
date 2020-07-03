<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取单选按钮的值</title>
<style type="text/css">
body,td,th{
	font-size:12px;
}
body{
	margin:10px 0px 0px 10px;
}
</style>
</head>

<body>
<form action="" method="post" name="form1">
性别：
<input name="sex" type="radio" value="男" checked>男
<input name="sex" type="radio" value="女">女
<input name="submit" type="submit" value="提交"></form>
<?php
if(isset($_POST["Submit"])){
	echo "您选择的性别为：".$_POST["sex"];
}
?>
</body>
</html>