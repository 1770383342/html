<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pwd']);
session_destroy();
header("location:index.php");
//跳转到index.php网页上
//参考：http://php.net/manual/zh/function.header.php
//http://blog.sina.com.cn/s/blog_Bedc37a80101ga96.html
?>
</body>
</html>