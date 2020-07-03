<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>获取搜索引擎的关键字</title>
</head>

<body>
<form name="form1" method="post" action="">
查询关键字：
<input name="content" type="text" id="content">
<input type="submit" name="Submit" value="搜索">
</form>
<?php
echo "您输入的关键字是：";
if(isset($_POST["content"])){
	echo $_POST["content"];
}
?>
</body>
</html>