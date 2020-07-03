<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>本地化日期</title>
</head>

<body>
<div align="center">
<?php
setlocale(LC_ALL,"en_US");
echo "美国格式：".strftime("Today is %A");
echo "<p>";
setlocale(LC_ALL,"chs");
echo "中文简体格式：".strftime("今天是%A");
echo "<p>";
setlocale(LC_ALL,"cht");
echo "<p>";
echo "繁体中文格式：".strftime("今天是%A");
?>
</div>
</body>
</html>