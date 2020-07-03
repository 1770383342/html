<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用界定符<<<定义字符串</title>
</head>

<body>
<div align="center">
<?php
$i='显示该行内容';
echo<<<std
这和双引号没有什么区别，\$i同样可以被输出出来。<p>
\$i的内容为：$i
std;
?>
</div>
</body>
</html>