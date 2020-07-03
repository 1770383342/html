<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用preg_grep()函数</title>
</head>

<body>
<?php
$preg = '/\d{3,4}-?\d{7,8}/';
$arr = array('043212345678','0431-7654321','12345678');
$preg_arr = preg_grep($preg,$arr);
var_dump($preg_arr);
?>
</body>
</html>