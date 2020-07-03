<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用checkdate()函数验证日期</title>
</head>

<body>
<div align="center">
<?php
$year = 2008;
$month = 2;
$day1 = 29;
$day2 = 30;
var_dump(checkdate($month,$day1,$year));
echo "<br>";
var_dump(checkdate($month,$day2,$year));
?>
</div>
</body>
</html>