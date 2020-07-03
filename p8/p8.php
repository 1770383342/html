<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>预定义常量</title>
</head>

<body>
<?php
echo "当前文件路径为：".__FILE__;
//使用_FILE_常量获取当前文件路径，小数点是字符串链接运行符
echo "<br>";
echo "当前行数为：".__LINE__;
//使用_LINE_常量获取当前所在行数
echo "<br>";
echo "当前PHP版本信息为：".PHP_VERSION;
//使用PHP_VERSION常量获取当前PHP版本
echo "<br>";
echo "当前操作系统为：".PHP_OS;
//使用PHP_OS常量获取当前操作系统
?>
</body>
</html>