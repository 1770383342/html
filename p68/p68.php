<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用substr_count()函数检索子串出现的次数</title>
</head>

<body>
<?php
$str="明日编程词典是词典中的词典";
//输出查询的字符串
echo substr_count($str,"词");
//输出"词"在字符串变量$str中出现的次数，返回3
?>
</body>
</html>