<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用explode()函数将字符串转换成数组</title>
</head>

<body>
<?php
$str = "时装、休闲、职业装";  //定义一个字符串
$strs = explode("、",$str);
//应用explode()函数将字符串转换成数组
print_r($strs);  //输出数组元素
?>
</body>
</html>