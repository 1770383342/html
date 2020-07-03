<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>双引号和单引号的区别</title>
</head>

<body>
<?php
$name = '重庆师范大学：';
$url = "www.cqnu.edu";//普通字符常量（常数）用双引号和单引号都一样，没有区别
echo $name.$url.".com";
echo '<p>';
echo "$name$url.com";
echo '<p>';
echo '$name$url.com';
//用双引号要替换变量中的值。而单引号不替换变量中的值，把变量名当普通的字符串来处理。
?>
</body>
</html>