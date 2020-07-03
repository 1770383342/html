<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用substr_replace()函数对指定字符串进行替换</title>
</head>

<body>
<?php
$str="用今日的辛勤工作，换明日的双倍回报！";
//定义字符串常量
$replace="百倍";
//定义预替换的字符串~~
echo substr_replace($str,$replace,26,4);
//替换字符串
?>
</body>
</html>