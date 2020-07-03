<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();//在同一窗口中打开新网页时，在建立会话后，只要PHPSESSID变量有效，跳转页面后PHPSESSID变量值(session id)也不会变。
echo "生存SESSION时间：",$_GET["time"],"<br>";
//取出time变量，他是链接的网页后面带的变量。
//"<a href= 'session.php?time=$expiry'>存在SESSION请点击我！</a>"
echo "传送页面时间：",date("H:i:s");
echo "<p>";
echo $_SESSION['user'],"<p>";
?>
</body>
</html>