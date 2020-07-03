<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
if(!empty($_SESSION["username"]))//会话失效后不会报username变量不存在的错误，此处最好不要使用$_SESSION["username"] != ""
echo "请等待60秒让Session失效<br>暂时SESSION存在！";
else
echo "SESSION已经失效";
?>
</body>
</html>