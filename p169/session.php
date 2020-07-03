<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
//date_default_timezone_set("Etc/GMT-8");
//以上这句代码还要取消注释使用一次，看效果。
echo "创建SESSION时间：".$_GET["time"]."<br>";
echo "传送页面时间：".date("H:i:s");
echo "<p>";
echo $_SESSION['user']."<p>";
?>
</body>
</html>