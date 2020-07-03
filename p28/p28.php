<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>三元运算</title>
</head>

<body>
<?php
$value = 100;  //声明一个整型变量
echo($value=false)?"三元运算":"没有该值";  //100转换为逻辑性为true,结果条件为false。输出"没有该值"
?>
</body>
</html>