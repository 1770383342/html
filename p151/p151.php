<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>输出格式化的时间日期</title>
</head>

<body>
<div align="center">
<?php
echo "输出单个变量：".date("Y")."-".date("m")."-".date("d");
echo "<p>";
echo "输出组合变量：".date("Y-m-d");
echo "<p>";
echo "输出更详细的日期及时间：".date("Y-m-d H:i:s");
echo "<p>";
echo "输出转义字符：";
echo date("\T\o\d\a\y \i\s \\t\h\e jS \o\f \y\e\a\\r");
//echo ' Today is the '.date("jS").' of year';
//echo date("\T\o\d\a\y \i\s \\t\h\e jS \o\\f \y\\e\a\\r");
?>
</div>
</body>
</html>